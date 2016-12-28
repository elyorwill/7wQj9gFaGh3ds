<?php

if(isset($_GET['email']) && isset($_GET['code'])){
  echo 'Email: '.$_GET['email'];
  echo '<br>';
  echo 'Code: '.$_GET['email'];
}
else {
  echo 'No email or code found.'
}
 ?>
