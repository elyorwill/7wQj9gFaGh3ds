<?php

/**
 * @author Elyor
 * @copyright 13.11.2016
 * @version 2.0
 */
session_start();
include"../inc/configAll.php";

ini_set('max_execution_time', 300);

if(isset($_SESSION['rdrlocation'])){
  $rdrlocation = $_SESSION['rdrlocation'];
}
else {
  $rdrlocation = '../client/';
}

if(isset($_POST['submitpost'])){

    require '../aws-app/start.php';

    $itemstatus = $_POST['submitpost'];

    $hostid = mysqli_real_escape_string($connecDB,$_POST['hostid']);

    $itemname = mysqli_real_escape_string($connecDB,$_POST['itemname']);
    $hometype = mysqli_real_escape_string($connecDB,$_POST['hometype']);
    $roomtype = mysqli_real_escape_string($connecDB,$_POST['roomtype']);
    $accommodate = mysqli_real_escape_string($connecDB,$_POST['accommodate']);
    $bedrooms = mysqli_real_escape_string($connecDB,$_POST['bedrooms']);
    $bathroomms = mysqli_real_escape_string($connecDB,$_POST['bathrooms']);
    $description = mysqli_real_escape_string($connecDB,$_POST['description']);

    $pricemode = mysqli_real_escape_string($connecDB,$_POST['pricemode']);
    $priceoriginal = mysqli_real_escape_string($connecDB,$_POST['priceoriginal']);

    $longitude = mysqli_real_escape_string($connecDB,$_POST['longitude']);
    $latitude = mysqli_real_escape_string($connecDB,$_POST['latitude']);
    $postcode = mysqli_real_escape_string($connecDB,$_POST['postcode']);
    $address = mysqli_real_escape_string($connecDB,$_POST['address']);
    $country = mysqli_real_escape_string($connecDB,$_POST['country']);
    $city = mysqli_real_escape_string($connecDB,$_POST['city']);

    $category = mysqli_real_escape_string($connecDB,$_POST['category']);

    if(!empty($_POST['amenity']))
    $amenities = implode(", ", $_POST['amenity']);
    else
    $amenities='';

    $ipaddress = $_SERVER['REMOTE_ADDR'];

    $successupimgs=0;
    $errorupimgs=0;

    if(count($_FILES['upload']['name']) > 0){

        if(count($_FILES['upload']['name']) < 14){

        $total = count($_FILES['upload']['name']);


        $adurl = str_replace(' ', '-', preg_replace("/[^0-9 a-z]/","",strtolower($itemname)));
        $prurl = $adurl;
        $itemurl = trim(preg_replace('/-+/', '-', $prurl), '-');

        //insert item
        $prSQL = "INSERT INTO item(hostid, title, url, category, hometype, roomtype, accommodate, bedrooms, bathrooms, amenities, info, status, postdate, postip)
                values($hostid, '$itemname', '$prurl', '$category', '$hometype', '$roomtype', $accommodate, $bedrooms, $bathroomms, '$amenities', '$description', $itemstatus, now(), '$ipaddress')";
        $prQuery = mysqli_query($connecDB,$prSQL);

        $itemid = mysqli_insert_id($connecDB);

        if($prQuery){

          //insert item price
          $itempricesql = "insert into itemprice(listid, pricecurrency, priceoriginal, pricediscount, pricemode)
                            values($itemid, '$defaultcurrency', $priceoriginal, $priceoriginal, '$pricemode')";
          mysqli_query($connecDB,$itempricesql);

          //insert item location
          $itemlocationsql = "insert into itemlocation(listid, longitude, latitude, address, postcode, city, country)
                              values($itemid, '$longitude', '$latitude', '$address', $postcode, '$city', '$country')";
          mysqli_query($connecDB,$itemlocationsql);


        include('resizeimage2.php');


            // Loop through each file
        for($i=0; $i<$total; $i++) {

        $name = $_FILES['upload']['name'][$i];
        $type = $_FILES['upload']['type'][$i];
        $size = $_FILES['upload']['size'][$i];
        $error = $_FILES['upload']['error'][$i];

        //Get the temp file path
        $tmpFilePath = $_FILES['upload']['tmp_name'][$i];


          //Make sure we have a filepath
          if ($tmpFilePath != ""){
            if($type == "image/jpeg" || $type == "image/jpg" || $type == "image/png" || $type == "image/gif" || $type == "image/pjpeg" || $type == "image/x-png"){
                if($size <=4288608){

                  //file details
                  $extension = explode('.', $name);
                  $extension = strtolower(end($extension));

                  //Tmp details
                  $key = uniqid(rand());
                  $tmp_file_name = "{$key}.{$extension}";
                  $tmp_file_path = "../temp/{$tmp_file_name}";

                    if(move_uploaded_file($tmpFilePath, $tmp_file_path)){

                        $addimgQuery = mysqli_query($connecDB, "insert into itemphotos(itemid, photo, sortnum) values('$itemid', '$tmp_file_name', 1)");

                        if($addimgQuery){

                          //upload original image
                          try {
                            $s3-> putObject([
                              'Bucket' => $config['s3']['bucket'],
                              'Key' => "uploads/items/{$itemid}/original/{$tmp_file_name}",
                              'Body' => fopen($tmp_file_path,'rb'),
                              'ACL' => 'public-read'
                            ]);
                          } catch (S3Exception $e) {
                            $errorupimgs++;
                          }


                          //resize and upload image
                          $resizeimage = new SimpleImage();
                          $resizeimage->load($tmp_file_path);
                          $resizeimage->resizeToWidth(1024);
                          $resizeimage->save($tmp_file_path);
                          try {
                            $s3-> putObject([
                              'Bucket' => $config['s3']['bucket'],
                              'Key' => "uploads/items/{$itemid}/full/{$tmp_file_name}",
                              'Body' => fopen($tmp_file_path,'rb'),
                              'ACL' => 'public-read'
                            ]);
                          } catch (S3Exception $e) {
                            $errorupimgs++;
                          }

                          //crop and upload image
                          $imagetocrop = ($tmp_file_path);
                          $filename= ($tmp_file_path);
                          $thumb_width = 450;
                          $thumb_height = 300;
                          include('cropimage.php');

                          try {
                            $s3-> putObject([
                              'Bucket' => $config['s3']['bucket'],
                              'Key' => "uploads/items/{$itemid}/grid/{$tmp_file_name}",
                              'Body' => fopen($tmp_file_path,'rb'),
                              'ACL' => 'public-read'
                            ]);
                          } catch (S3Exception $e) {
                            $errorupimgs++;
                          }

                          unlink($tmp_file_path);
                          $successupimgs++;
                        }
                        else {
                          $errorupimgs++;
                        }
                    }
                    else {
                      $errorupimgs++;
                    }

                }//max size
                else {
                  $errorupimgs++;
                }
            }//allowed file types
            else {
              $errorupimgs++;
            }

          }
        }//end of loop to upload images

        $_SESSION['rmnotfymsg'] = '<p class="alert alert-success">'.$itemname.' is successfully Added.<br>Success '.$successupimgs.' images<br>Error '.$errorupimgs.' images</p>';
        header('location: '.$rdrlocation);

        }//end of run query
         else{
           $_SESSION['rmnotfymsg'] = '<p class="alert alert-danger">Failed to insert item information<br> '.mysqli_error($connecDB).'</p>';
           header('location: '.$rdrlocation);
         }


    }
    else{
      $_SESSION['rmnotfymsg'] = '<p class="alert alert-danger">You can only upload maximum 13 images.</p>';
      header('location: '.$rdrlocation);
    }

    }


    //if isset image upload
    else{
      $_SESSION['rmnotfymsg'] = '<p class="alert alert-danger">Please choose at least 1 image.</p>';
      header('location: '.$rdrlocation);
    }



}

else{
  $_SESSION['rmnotfymsg'] = '<p class="alert alert-warning">Please fill  all the required fields</p>';
  header('location: '.$rdrlocation);
}
?>
