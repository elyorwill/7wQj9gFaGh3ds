<?php

/**
 * @author Elyor
 * @copyright 3 / 8 / 2016
 */
date_default_timezone_set("Asia/Kuala_Lumpur");

if(session_id() == '') {
    session_start();
}

//online
$db_username = 'xst60icf6z';
$db_password = 'apl73fny8GsksK02';
$db_name = 'rentmarket';
$db_host = 'localhost';

//offline
// $db_username = 'root';
// $db_password = '';
// $db_name = 'rentmarket';
// $db_host = 'localhost';


$connecDB = mysqli_connect($db_host, $db_username, $db_password,$db_name) or die('could not connect to database');


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
