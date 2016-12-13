<?php


include"../../inc/configAll.php";

if(isset($_SESSION['rdrlocation'])){
  $rdrlocation = $_SESSION['rdrlocation'];
}
else {
  $rdrlocation = '../login.php';
}

if(isset($_POST['login']))
{
$userid = mysqli_real_escape_string($connecDB,$_POST['username']);
$userpass = mysqli_real_escape_string($connecDB,$_POST['password']);

$userid = stripslashes($userid);
$userpass = stripslashes($userpass);

$ipaddress = $_SERVER['REMOTE_ADDR'];
$userbrowser = $_SERVER['HTTP_USER_AGENT'];

$userlogininfo = mysqli_fetch_array(mysqli_query($connecDB, "select * from admins where username = '$userid' OR email =  '$userid'"));

$cUserid = $userlogininfo['id'];

    if( isset($userlogininfo['id']) && ($userid == $userlogininfo['username'] || $userid == $userlogininfo['email']) && $userpass == $userlogininfo['password'])
    {

        $updatelastlogin = mysqli_query($connecDB, "insert into loginlogsadmin(userid, logindate, loginip, loginbrowser)
                                                      values($cUserid, now(), '$ipaddress', '$userbrowser')");
        if($updatelastlogin){
            $_SESSION['onlineadminid'] = $userlogininfo['id'];
            $_SESSION['onlineadminname'] = $userlogininfo['fname'];

            $_SESSION['rmnotfymsg'] = '<p class="alert alert-success">Login successful</p>';

            header('location: '.$rdrlocation);
        }
        else{
          $_SESSION['rmnotfymsg'] = '<p class="alert alert-danger">Failed to insert your login log<br>Error:'.mysqli_error($connecDB).'</p>';
          header('location: '.$rdrlocation);
        }
    }
    else{
      $_SESSION['rmnotfymsg'] = '<p class="alert alert-danger">Incorrect login details</p>';
    header('location: '.$rdrlocation);
  }
}
else{
  $_SESSION['rmnotfymsg'] = '<p class="alert alert-danger">Login to do your stuff</p>';
header('location: '.$rdrlocation);
}

?>
