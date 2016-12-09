<?php

session_start();

include_once 'inc/configAll.php';


$showtables = mysqli_query($connecDB,"show tables");

$mysqtablescol='<ol>';
while($mysqltables = mysqli_fetch_array($showtables)){
  $mysqtablescol .= '<li>'.$mysqltables['Tables_in_rentmarket']."</li>";
}
$mysqtablescol .='</ul>';


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

 ?>

 <html>
<head></head>

<body>
  <?php

echo $mysqtablescol.'<hr>';

echo $sqlrunresult.'<hr>';
   ?>
<form action="?runsql" method="post">
<label>Query:</label><br>
<textarea name="sql"></textarea><br>
<input name="runsql" type="submit"/>
</form>
</body>
 </html>
