<?php

include"../inc/configAll.php";


if(isset($_SESSION['rdrlocation'])){
  $rdrlocation = $_SESSION['rdrlocation'];
}
else {
  $rdrlocation = '../';
}


if(isset($_GET['deleteuser']) && isset($_GET['userphoto'])){

  //BEFORE DELETE CHECK IF USER HAS LISTINGS!!!!!!!

  //check if user is logged in then proceed action (if not admin)
  //if user is logged in, make logout

  $userid = $_GET['deleteuser'];
  $userimg = $_GET['userphoto'];
  $userfullname = $_GET['name'];

  $deleteaddress = mysqli_query($connecDB,"delete from address where userid = $userid");
  if($deleteaddress){
    $deleteloginlogs = mysqli_query($connecDB,"delete from loginlogs where userid = $userid");
    if($deleteloginlogs){
      $deleteuser = mysqli_query($connecDB,"delete from user where id = $userid");
      if($deleteuser){
        $userphotopath = '../uploads/users/';
        if(file_exists($userphotopath.$userimg)){
          unlink($userphotopath.$userimg);
        }
        if(file_exists($userphotopath.'full/'.$userimg)){
          unlink($userphotopath.'full/'.$userimg);
        }
        if(file_exists($userphotopath.'thumb/'.$userimg)){
          unlink($userphotopath.'thumb/'.$userimg);
        }

        $_SESSION['rmnotfymsg'] = '<p  class="alert alert-success"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'.$userfullname.' is successfully deleted</p>';
        header('location: ../admin/users.php');
      }
      else{
        //user is not deleted
        $_SESSION['rmnotfymsg'] = '<p  class="alert alert-warning"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Failed to delete user, but address and login logs are deleted!</p>';
        header('location: '.$rdrlocation);
      }

    }
    else{
      //login logs is not deleted
      $_SESSION['rmnotfymsg'] = '<p  class="alert alert-warning"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Address is deleted, but user and user login logs are not deleted</p>';
      header('location: '.$rdrlocation);
    }


  }
  else{
    //login logs is not deleted
    $_SESSION['rmnotfymsg'] = '<p  class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Failed to delete user!</p>';
    header('location: '.$rdrlocation);
  }



}
 ?>
