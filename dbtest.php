<?php

session_start();

include_once 'inc/configAll.php';


$showtables = mysqli_query($connecDB,"show tables");

$mysqtablescol=array();

$mysqtablescol = mysqli_fetch_array($showtables);



$sqlrunresult='';

if(isset($_POST['runsql'])){
 $sqlinject = $_POST['sql'];

 $runmysql = mysqli_query($connecDB,$sqlinject);
 if($runmysql){
   $sqlrunresult .='SUCCESS!';
 }else {
   $sqlrunresult .= mysqli_error($connecDB);
 }
}


//db info
$dbinformation='<br>DB info:';
$dbinformation .= '<br>Host: '.$db_host;
$dbinformation .= '<br>Username: '.$db_username;
$dbinformation .= '<br>Password: '.$db_password;
$dbinformation .= '<br>DB: '.$db_name;
 ?>

 <html>
<head></head>

<body>
  <?php

echo $sqlrunresult.'<hr>';

echo '<pre>';
print_r($mysqtablescol);
echo '</pre>';

echo $dbinformation;
   ?>
<form action="?runsql" method="post">
<label>Query:</label><br>
<textarea name="sql"></textarea><br>
<input name="runsql" type="submit"/>
</form>
</body>
 </html>
