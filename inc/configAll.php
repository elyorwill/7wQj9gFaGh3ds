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
  //offline
  $db_username = 'root';
  $db_password = '';
  $db_name = 'rentmarket';
  $db_host = 'localhost';
} else {
  //AWS online
  $db_username = $_SERVER['RDS_USERNAME'];
  $db_password = $_SERVER['RDS_PASSWORD'];
  $db_name = $_SERVER['RDS_DB_NAME'];
  $db_port = $_SERVER['RDS_PORT'];
  $db_host = $_SERVER['RDS_HOSTNAME'].', '.$db_port;


}

  $connecDB = mysqli_connect($db_host, $db_username, $db_password, $db_name) or die('could not connect to database');





$createdatabasesql = "CREATE DATABASE IF NOT EXISTS rentmarket";
mysqli_query($connecDB,$createdatabasesql);

$_SESSION['shomeurl'] = 'http://localhost/rentmarket/7wQj9gFaGh3ds';


if(isset($_SESSION['rmnotfymsg'])){
    $notficationmsg = $_SESSION['rmnotfymsg'];
    unset($_SESSION['rmnotfymsg']);
}
else
$notficationmsg = '';


?>
