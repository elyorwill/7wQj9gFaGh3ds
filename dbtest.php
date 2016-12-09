<?php

session_start();

include_once 'inc/configAll.php';


$showtables = mysqli_query($connecDB,"show tables");

$mysqtablescol=array();

$mysqtablescol = mysqli_fetch_array($showtables);


 ?>

 <html>
<head></head>

<body>
  <?php

echo '<pre>';
print_r($mysqtablescol);
echo '</pre>';

   ?>

</body>
 </html>
