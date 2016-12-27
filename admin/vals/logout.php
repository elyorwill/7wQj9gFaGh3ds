<?php

/**
 * @author Elyor
 * @copyright 2013
 */
session_start();
unset($_SESSION['onlineadminid']);
unset($_SESSION['onlineadminname']);

header('Location: ../login.php');

?>
