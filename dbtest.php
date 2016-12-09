<?php

session_start();

include_once 'inc/configAll.php';


$showtables = mysqli_query($connecDB,"show tables");

$mysqtablescol='<ol>';
while($mysqltables = mysqli_fetch_array($showtables)){
  $mysqtablescol .= '<li>'.$mysqltables['Tables_in_rentmarket']."</li>";
}
$mysqtablescol .='</ul>';

echo $mysqtablescol;
 ?>
