<?php

function random_username($string) {
$pattern = " ";
$firstPart = strstr(strtolower($string), $pattern, true);
$secondPart = substr(strstr(strtolower($string), $pattern, false), 0,3);
$nrRand = rand(0, 100);

$username = trim($firstPart).trim($secondPart).trim($nrRand);
return $username;
}
 ?>
