<?php

include"../inc/configAll.php";


if(isset($_SESSION['rdrlocation'])){
  $rdrlocation = $_SESSION['rdrlocation'];
}
else {
  $rdrlocation = '../posts';
}


if(isset($_GET['deletepost'])){
  $postid = $_GET['deletepost'];
  $posttitle = mysqli_real_escape_string($connecDB,$_GET['title']);

  $deleterates = mysqli_query($connecDB,"delete from postrate where postid = $postid");
  if($deleterates){
      $deleteuser = mysqli_query($connecDB,"delete from post where id = $postid");
      if($deleteuser){
        $_SESSION['notfymsg'] = '<p  class="alert alert-success"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'.$posttitle.' is successfully deleted</p>';
        header('location: ../posts.php');
      }
      else{
        $_SESSION['notfymsg'] = '<p  class="alert alert-warning"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Failed to delete post, but ratings are deleted!</p>';
        header('location: '.$rdrlocation);
      }
  }
  else{
    $_SESSION['notfymsg'] = '<p  class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Failed to delete user!</p>';
    header('location: '.$rdrlocation);
  }
}
else if(isset($_POST['updatephoto']) && isset($_POST['postid']) && is_numeric($_POST['postid'])){
  $coverphoto = $_POST['updatephoto'];
  $postid = $_POST['postid'];

  $updatephoto = mysqli_query($connecDB,"update post set coverphoto = '$coverphoto' where id = $postid");
  if($updatephoto){
    $_SESSION['notfymsg'] = '<p  class="alert alert-success"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Photo is updated</p>';
    header('location: '.$rdrlocation);
  }
  else {
    $_SESSION['notfymsg'] = '<p  class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Failed to update photo</p>';
    header('location: '.$rdrlocation);
  }

}
else if(isset($_POST['updatetitle']) && is_numeric($_POST['updatetitle'])){
  $datatochange = mysqli_real_escape_string($connecDB,$_POST['posttitle']);
  $postid = $_POST['updatetitle'];

  $adurl = str_replace(' ', '-', preg_replace("/[^0-9 a-z]/","",strtolower($datatochange)));
  $posturl = trim(preg_replace('/-+/', '-', $adurl), '-');

  $updatephoto = mysqli_query($connecDB,"update post set title = '$datatochange', url = '$posturl' where id = $postid");
  if($updatephoto){
    $_SESSION['notfymsg'] = '<p  class="alert alert-success"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Title is changed</p>';
    header('location: '.$rdrlocation);
  }
  else {
    $_SESSION['notfymsg'] = '<p  class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Failed to update name</p>';
    header('location: '.$rdrlocation);
  }
}
else if(isset($_POST['updatecategory']) && is_numeric($_POST['updatecategory'])){
  $datatochange = mysqli_real_escape_string($connecDB,$_POST['postcategory']);
  $postid = $_POST['updatecategory'];

  $updatephoto = mysqli_query($connecDB,"update post set categoryid = '$datatochange' where id = $postid");
  if($updatephoto){
    $_SESSION['notfymsg'] = '<p  class="alert alert-success"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Category is changed</p>';
    header('location: '.$rdrlocation);
  }
  else {
    $_SESSION['notfymsg'] = '<p  class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Failed to update Category</p>';
    header('location: '.$rdrlocation);
  }
}
else if(isset($_POST['updatetags']) && is_numeric($_POST['updatetags'])){
  $datatochange = mysqli_real_escape_string($connecDB,$_POST['posttags']);
  $userid = $_POST['updatetags'];

  $updatephoto = mysqli_query($connecDB,"update post set tags = '$datatochange' where id = $userid");
  if($updatephoto){
    $_SESSION['notfymsg'] = '<p  class="alert alert-success"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>tags are updated</p>';
    header('location: '.$rdrlocation);
  }
  else {
    $_SESSION['notfymsg'] = '<p  class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Failed to update tags</p>';
    header('location: '.$rdrlocation);
  }
}
else if(isset($_POST['updateshortinfo']) && is_numeric($_POST['updateshortinfo'])){
  $datatochange = mysqli_real_escape_string($connecDB,$_POST['shortinfo']);
  $userid = $_POST['updateshortinfo'];

  $updatephoto = mysqli_query($connecDB,"update post set shortinfo = '$datatochange' where id = $userid");
  if($updatephoto){
    $_SESSION['notfymsg'] = '<p  class="alert alert-success"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Description is changed</p>';
    header('location: '.$rdrlocation);
  }
  else {
    $_SESSION['notfymsg'] = '<p  class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Failed to update description<br>'.mysqli_error($connecDB).'</p>';
    header('location: '.$rdrlocation);
  }
}
else if(isset($_POST['updatepostbody']) && is_numeric($_POST['updatepostbody'])){
  $datatochange = mysqli_real_escape_string($connecDB,$_POST['postbody']);
  $userid = $_POST['updatepostbody'];

  $updatephoto = mysqli_query($connecDB,"update post set postbody = '$datatochange' where id = $userid");
  if($updatephoto){
    $_SESSION['notfymsg'] = '<p  class="alert alert-success"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Post body is changed is updated</p>';
    header('location: '.$rdrlocation);
  }
  else {
    $_SESSION['notfymsg'] = '<p  class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Failed to update post body<br>'.mysqli_error($connecDB).'</p>';
    header('location: '.$rdrlocation);
  }
}
else if(isset($_POST['updateauhor']) && is_numeric($_POST['updateauhor'])){
  $datatochange = mysqli_real_escape_string($connecDB,$_POST['postauthor']);
  $userid = $_POST['updateauhor'];

  $updatephoto = mysqli_query($connecDB,"update post set authorid = '$datatochange' where id = $userid");
  if($updatephoto){
    $_SESSION['notfymsg'] = '<p  class="alert alert-success"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Post author is changed</p>';
    header('location: '.$rdrlocation);
  }
  else {
    $_SESSION['notfymsg'] = '<p  class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Failed to update post author<br>'.mysqli_error($connecDB).'</p>';
    header('location: '.$rdrlocation);
  }
}
 ?>
