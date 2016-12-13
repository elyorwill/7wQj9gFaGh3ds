<?php

/**
 * @author Elyor
 * @copyright 13.11.2016
 * @version 2.0
 */
session_start();
include"../inc/configAll.php";


if(isset($_SESSION['rdrlocation'])){
  $rdrlocation = $_SESSION['rdrlocation'];
}
else {
  $rdrlocation = '../item-add.php';
}

if(isset($_POST['submitpost'])){

    $itemstatus = $_POST['submitpost'];

    $ownerid = mysqli_real_escape_string($connecDB,$_POST['ownerid']);

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

    $amenities = implode(", ", $_POST['amenity']);

    $ipaddress = $_SERVER['REMOTE_ADDR'];

    if(count($_FILES['upload']['name']) > 0){

        if(count($_FILES['upload']['name']) < 14){

        $total = count($_FILES['upload']['name']);


        $adurl = str_replace(' ', '-', preg_replace("/[^0-9 a-z]/","",strtolower($itemname)));
        $prurl = $adurl;
        $itemurl = trim(preg_replace('/-+/', '-', $prurl), '-');

        //insert item
        $prSQL = "INSERT INTO item(ownerid, title, url, category, hometype, roomtype, accommodate, bedrooms, bathrooms, amenities, info, status, postdate, postip)
                values($ownerid, '$itemname', '$prurl', '$category', '$hometype', '$roomtype', $accommodate, $bedrooms, $bathroomms, '$amenities', '$description', $itemstatus, now(), '$ipaddress')";
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

          //create image folders
          $itemimgpathoriginal = "../uploads/items/".$itemid."/original";
          if (!is_dir($itemimgpathoriginal)) {
              mkdir($itemimgpathoriginal, 0777, true);
          }
          $itemimgpathgrid = "../uploads/items/".$itemid."/grid";
          if (!is_dir($itemimgpathgrid)) {
              mkdir($itemimgpathgrid, 0777, true);
          }
          $itemimgpathfull = "../uploads/items/".$itemid."/full";
          if (!is_dir($itemimgpathfull)) {
              mkdir($itemimgpathfull, 0777, true);
          }
          //end of create image folders

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
            //Setup our new file path
            //$newFilePath = "./uploadFiles/" . $_FILES['upload']['name'][$i];

            if($type == "image/jpeg" || $type == "image/jpg" || $type == "image/png" || $type == "image/gif" || $type == "image/pjpeg" || $type == "image/x-png"){
                if($size <=4288608){

                    $str2 = strstr($_FILES['upload']['type'][$i], "/");
                    $str4 = substr($str2, 0,1);
                    $itype = str_replace($str4, ".",$str2);
                    $primage = uniqid(rand()).$itype;// image


                    $newFilePath = $itemimgpathoriginal."/".$primage;

                    if(move_uploaded_file($tmpFilePath, $newFilePath)){

                        $addimgQuery = mysqli_query($connecDB, "insert into itemphotos(itemid, photo, sortby) values('$itemid', '$primage', 1)");

                        if($addimgQuery){

                            $resizeimage = new SimpleImage();
                            $resizeimage->load($newFilePath);
                            $resizeimage->resizeToWidth(1024);
                            $resizeimage->save($itemimgpathfull.'/'.$primage);

                            $imagetocrop = ($newFilePath);
                            $filename= ($itemimgpathgrid.'/'.$primage);
                            $thumb_width = 450;
                            $thumb_height = 300;
                            include('cropimage.php');

                            //remove original
                            // unlink($newFilePath);
                        }


                    }

                }//max size
            }//allowed file types

          }
        }//end of loop to upload images

        $_SESSION['rmnotfymsg'] = '<p class="alert alert-success">'.$itemname.' is successfully Added</p>';
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
