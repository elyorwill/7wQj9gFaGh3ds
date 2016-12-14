<?php

/**
 * @author Elyor
 * @copyright 19/10/2014
 * @version 2.0
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

              move_uploaded_file($temp, "../uploads/users/".$sampleimg);

              include('resizeimage2.php');
              $resizeimage = new SimpleImage();
              $resizeimage->load('../uploads/users/'.$sampleimg);
              $resizeimage->resizeToWidth(1024);
              $resizeimage->save('../uploads/users/full/'.$sampleimg);

              $imagetocrop = ('../uploads/users/'.$sampleimg);
              $filename= ('../uploads/users/thumb/'.$sampleimg);
              $thumb_width = 320;
              $thumb_height = 320;
              include('cropimage.php');

              $userimage = $sampleimg;

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

    $userimage = "";

  }// if no avatar

  //insert user into database
  $regsql = "INSERT INTO user(fullname, email, phone, photo, description, regdate, regip, status)
                            values('$fullname', '$email', '$phone', '$userimage', '$description', now(), '$ipaddress', 0)";

  $userqueryrun = mysqli_query($connecDB,$regsql);
  if($userqueryrun){

    if($_POST['submituserform'] == "admin"){
      $_SESSION['rmnotfymsg'] = '<p  class="alert alert-success">Registration is successful</p>';
      header('location: '.$rdrlocation);
    }
    else{

$newuserid = mysqli_insert_id($connecDB);
$activationcode = uniqid(rand());

$adduseractivationquery = mysqli_query("insert into useractivation(userid, activationcode, sentdate) values($newuserid, '$activationcode', now())");

if($adduseractivationquery){
  $from = $rmnoreplyemail;
  $subject = "Verify your email with Rentmarket";
  $to = $email;

$messagebody = <<<EMAIL

Dear $fullname,

Welcome to Rentmarket.

Please click the link below to verify your email address:

$verificationlink

or copy it and paste to your browser

Thanks for choosing Rentmarket.


This message is auto sent by Rentmarket Mailing system. Please do not reply to this email.
EMAIL;

  $header = "From: $from";

  $sendactivation = mail($to, $subject, $messagebody, $header);
  if($sendactivation){
    $_SESSION['rmnotfymsg'] = '<p  class="alert alert-success">You have successfully registered. Please check your email for verification link</p>';
    header('location: '.$rdrlocation);
  }
  else{
    $_SESSION['rmnotfymsg'] = '<p  class="alert alert-warning">You have registered and activation code is generated, but failed to send email. Please contact us to activate manually</p>';
    header('location: '.$rdrlocation);
  }

}
else{

  $_SESSION['rmnotfymsg'] = '<p  class="alert alert-warning">You have registered but failed to generate and send activation link. Please contact us to activate manually</p>';
  header('location: '.$rdrlocation);

}



    }

  }
  else{
    $_SESSION['rmnotfymsg'] = '<p  class="alert alert-danger">Failed to register.<br>Error: '.mysqli_error($connecDB).'</p>';
    header('location: '.$rdrlocation);
  }



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
