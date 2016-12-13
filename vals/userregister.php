<?php

/**
 * @author Elyor
 * @copyright 19/10/2014
 * @version 1.0
 */

include"../inc/configAll.php";


if(isset($_SESSION['rdrlocation'])){
  $rdrlocation = $_SESSION['rdrlocation'];
}
else {
  $rdrlocation = '../register.php';
}


if(isset($_POST['submituserform'])){

$fullname = mysqli_real_escape_string($connecDB,$_POST['fullname']);
$email = mysqli_real_escape_string($connecDB,$_POST['email']);
$phone = mysqli_real_escape_string($connecDB,$_POST['phone']);
$description = mysqli_real_escape_string($connecDB,$_POST['description']);

$ipaddress = $_SERVER['REMOTE_ADDR'];

$checkexistemail = mysqli_query($connecDB,"select email from user where email = '$email'");


if(mysqli_num_rows($checkexistemail) < 1){

  if(!empty($_FILES['image']['name'])){

  $name = $_FILES['image']['name'];
  $type = $_FILES['image']['type'];
  $size = $_FILES['image']['size'];
  $temp = $_FILES['image']['tmp_name'];
  $error = $_FILES['image']['error'];

  if($error>0)
  {
    $_SESSION['rmnotfymsg'] = '<p  class="alert alert-danger">Invalid Image type.</p>';
    header('location: '.$rdrlocation);
  }
  else
  {

      if($type == "image/jpeg" || $type == "image/jpg" ||  $type == "image/gif" || $type == "image/png" || $type == "application/octet-stream")
      {
          if($size <=4300000)
          {

              $sampleimg = rand(10000,999999).".".end((explode(".", $name)));

              $query = "INSERT INTO user(fullname, email, phone, photo, description, regdate, regip, status)
                                          values('$fullname', '$email', '$phone', '$sampleimg', '$description', now(), '$ipaddress', 1)";

              $run = mysqli_query($connecDB, $query);

              //mysqli_close($connecDB);

              if ($run){
                  $_SESSION['applicationsubmitted']=1;

                  move_uploaded_file($temp, "../uploads/users/".$sampleimg);

                  include('resizeimage2.php');
                  $resizeimage = new SimpleImage();
                  $resizeimage->load('../uploads/users/'.$sampleimg);
                  $resizeimage->resizeToWidth(1024);
                  $resizeimage->save('../uploads/users/full/'.$sampleimg);

                  // $_SESSION['joinusform'] = 1;

                  $_SESSION['rmnotfymsg'] = '<p  class="alert alert-success">Registration is successful</p>';
                  header('location: '.$rdrlocation);
              }
              else{
                $_SESSION['rmnotfymsg'] = '<p  class="alert alert-danger">Failed to register.<br>Error: '.mysqli_error($connecDB).'</p>';
                header('location: '.$rdrlocation);
              }
          }
      else{
        $_SESSION['rmnotfymsg'] = '<p  class="alert alert-danger">Image size is too big. Max. 4MB</p>';
        header('location: '.$rdrlocation);
      }



      }
      else{
        $_SESSION['rmnotfymsg'] = '<p  class="alert alert-danger">Invalid Image file type. Allowed: jpg, png, and gif</p>';
        header('location: '.$rdrlocation);
      }


  }
  }//if there is avatar
  else{

      $querysql = "INSERT INTO user(fullname, email, phone, photo, description, regdate, regip, status)
                                values('$fullname', '$email', '$phone', 'user.jpg', '$description', now(), '$ipaddress', 1)";

      $query = mysqli_query($connecDB,$querysql);
      if($query){
        $_SESSION['rmnotfymsg'] = '<p  class="alert alert-success">Registration is successful</p>';
        header('location: '.$rdrlocation);
      }
      else{
        $_SESSION['rmnotfymsg'] = '<p  class="alert alert-danger">Failed to register.<br>Error: '.mysqli_error($connecDB).'</p>';
        header('location: '.$rdrlocation);
      }


  }// if no avatar
}//if email does not exist
else{
  $_SESSION['rmnotfymsg'] = '<p  class="alert alert-danger">'.$email.' is already registered.</p>';
  header('location: '.$rdrlocation);
}

}

else{
  $_SESSION['rmnotfymsg'] = '<p  class="alert alert-warning">Please fill up the form</p>';
  header('location: '.$rdrlocation);
}

?>
