<?php

/**
 * @author Elyor
 * @copyright 3 / 8 / 2016
 */
date_default_timezone_set("Asia/Kuala_Lumpur");

if(session_id() == '') {
    session_start();
}


$currenturl = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];

if (strpos($currenturl,'7wQj9gFaGh3ds') !== false) {
  $homeurl = 'localhost/RM%20git/client/';
  //offline
  $db_username = 'root';
  $db_password = 'root';
  $db_name = 'rentmarket1';
  $db_host = 'localhost:8888';
  $connecDB = mysqli_connect($db_host, $db_username, $db_password, $db_name) or die('could not connect to database');
} else {
  $homeurl = 'http://rmdeploy.ap-southeast-1.elasticbeanstalk.com';
  //AWS online
  $db_username = $_SERVER['RDS_USERNAME'];
  $db_password = $_SERVER['RDS_PASSWORD'];
  $db_name = $_SERVER['RDS_DB_NAME'];
  $db_port = $_SERVER['RDS_PORT'];
  $db_host = $_SERVER['RDS_HOSTNAME'];

  $connecDB = mysqli_connect($db_host, $db_username, $db_password, $db_name,$db_port) or die('could not connect to database');
}
$_SESSION['shomeurl']=$homeurl;



// $createdatabasesql = "CREATE DATABASE IF NOT EXISTS rentmarket";
// mysqli_query($connecDB,$createdatabasesql);


//used to send verification link
$rmnoreplyemail = 'no-reply@rentmarket.com.my';


$defaultcurrency = "RM";

if(isset($_SESSION['rmnotfymsg'])){
    $notficationmsg = $_SESSION['rmnotfymsg'];
    unset($_SESSION['rmnotfymsg']);
}
else
$notficationmsg = '';


?>
