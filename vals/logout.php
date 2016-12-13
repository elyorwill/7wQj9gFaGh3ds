<?php

/**
 * @author Elyor
 * @copyright 2013
 */
session_start();
unset($_SESSION['onlineuserid']);
unset($_SESSION['onlineusername']);

header('Location: ../?signout');

?>