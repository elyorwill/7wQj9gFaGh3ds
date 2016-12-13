<?php

/**
 * @author Elyor
 * @copyright 28 4 2014
 * @version 1.0
 */
session_start();
include"db_connection.php";

if(isset($_POST['login']))
{
$userid = mysqli_real_escape_string($connecDB,$_POST['username']);
$userpass = mysqli_real_escape_string($connecDB,$_POST['password']);

$userid = stripslashes($userid);
$userpass = stripslashes($userpass);

if(!empty($_POST['rdrurl']))
$reLocation = mysqli_real_escape_string($connecDB,$_POST['rdrurl']);
else
$reLocation = '../account.php';

$userlogininfo = mysqli_fetch_array(mysqli_query($connecDB, "select id, userid, password, fname, email from members where userid = '$userid' OR email =  '$userid'"));

$cUserid = $userlogininfo['id'];

    if( isset($userlogininfo['id']) && ($userid == $userlogininfo['userid'] || $userid == $userlogininfo['email']) && $userpass == $userlogininfo['password'])
    {
        
        $updatelastlogin = mysqli_query($connecDB, "UPDATE members SET lastlogin=sysdate() where id = '$cuserid'");
        if($updatelastlogin){
            $_SESSION['onlineuserid'] = $userlogininfo['id'];
            $_SESSION['onlineusername'] = $userlogininfo['fname'];
            
            header('location: '.$reLocation);
        }
        else
        header('location: ../login.php?in=Temporary error. Please try later');
    }
    else
    header('location: ../login.php?case=Incorrect login info. ');
}
else
header('location: ../login.php?case=Login to continue');

?>