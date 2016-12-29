<?php

include"../inc/configAll.php";


if(isset($_SESSION['rdrlocation'])){
  $rdrlocation = $_SESSION['rdrlocation'];
}
else {
  $rdrlocation = '../items';
}


if(isset($_GET['deleteitem'])){
  $itemid = $_GET['deleteitem'];
  $itemtitle = mysqli_real_escape_string($connecDB,$_GET['title']);

  $deletelocation = mysqli_query($connecDB,"delete from itemlocation where listid = $itemid");
  if($deletelocation){





    $getimagesq = mysqli_query($connecDB,"select * from itemphotos where itemid = $itemid");
    while($getimagesw = mysqli_fetch_array($getimagesq)){
      if(file_exists('../uploads/items/'.$itemid.'/original/'.$getimagesw['photo'])){
        unlink('../uploads/items/'.$itemid.'/original/'.$getimagesw['photo']);
      }
      if(file_exists('../uploads/items/'.$itemid.'/full/'.$getimagesw['photo'])){
        unlink('../uploads/items/'.$itemid.'/full/'.$getimagesw['photo']);
      }
      if(file_exists('../uploads/items/'.$itemid.'/grid/'.$getimagesw['photo'])){
        unlink('../uploads/items/'.$itemid.'/grid/'.$getimagesw['photo']);
      }
    }

    if(is_dir('../uploads/items/'.$itemid.'/original')){
      rmdir('../uploads/items/'.$itemid.'/original');
    }
    if(is_dir('../uploads/items/'.$itemid.'/full')){
      rmdir('../uploads/items/'.$itemid.'/full');
    }
    if(is_dir('../uploads/items/'.$itemid.'/grid')){
      rmdir('../uploads/items/'.$itemid.'/grid');
    }
    if(is_dir('../uploads/items/'.$itemid.'')){
      rmdir('../uploads/items/'.$itemid.'');
    }

    $deletephotos = mysqli_query($connecDB,"delete from itemphotos where itemid = $itemid");
    if($deletephotos){
      $deleteuser = mysqli_query($connecDB,"delete from item where id = $itemid");
      if($deleteuser){
        $_SESSION['rmnotfymsg'] = '<p class="alert alert-success"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'.$itemtitle.' is successfully deleted</p>';
        header('location: ../admin/items.php');
      }
      else{
        $_SESSION['rmnotfymsg'] = '<p class="alert alert-warning"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Failed to delete lising, but location and photos are deleted!</p>';
        header('location: '.$rdrlocation);
      }
    }// delete photos
    else {
      $_SESSION['rmnotfymsg'] = '<p class="alert alert-warning"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Failed to listing and photos, but location is deleted.</p>';
      header('location: '.$rdrlocation);
    }
  }// delete location
  else{
    $_SESSION['rmnotfymsg'] = '<p class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Failed to delete listing location!</p>';
    header('location: '.$rdrlocation);
  }
}
else if(isset($_POST['updatephoto']) && isset($_POST['itemid']) && is_numeric($_POST['itemid'])){
  $coverphoto = $_POST['updatephoto'];
  $itemid = $_POST['itemid'];

  $updatephoto = mysqli_query($connecDB,"update item set coverphoto = '$coverphoto' where id = $itemid");
  if($updatephoto){
    $_SESSION['rmnotfymsg'] = '<p  class="alert alert-success"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Photo is updated</p>';
    header('location: '.$rdrlocation);
  }
  else {
    $_SESSION['rmnotfymsg'] = '<p  class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Failed to update photo</p>';
    header('location: '.$rdrlocation);
  }

}
else if(isset($_POST['updatetitle']) && is_numeric($_POST['updatetitle'])){
  $datatochange = mysqli_real_escape_string($connecDB,$_POST['posttitle']);
  $itemid = $_POST['updatetitle'];

  $adurl = str_replace(' ', '-', preg_replace("/[^0-9 a-z]/","",strtolower($datatochange)));
  $itemurl = trim(preg_replace('/-+/', '-', $adurl), '-');

  $updatephoto = mysqli_query($connecDB,"update item set title = '$datatochange', url = '$itemurl' where id = $itemid");
  if($updatephoto){
    $_SESSION['rmnotfymsg'] = '<p  class="alert alert-success"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Title is changed</p>';
    header('location: '.$rdrlocation);
  }
  else {
    $_SESSION['rmnotfymsg'] = '<p  class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Failed to update name</p>';
    header('location: '.$rdrlocation);
  }
}
else if(isset($_POST['updatecategory']) && is_numeric($_POST['updatecategory'])){
  $datatochange = mysqli_real_escape_string($connecDB,$_POST['postcategory']);
  $itemid = $_POST['updatecategory'];

  $updatephoto = mysqli_query($connecDB,"update item set categoryid = '$datatochange' where id = $itemid");
  if($updatephoto){
    $_SESSION['rmnotfymsg'] = '<p  class="alert alert-success"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Category is changed</p>';
    header('location: '.$rdrlocation);
  }
  else {
    $_SESSION['rmnotfymsg'] = '<p  class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Failed to update Category</p>';
    header('location: '.$rdrlocation);
  }
}
else if(isset($_POST['updatetags']) && is_numeric($_POST['updatetags'])){
  $datatochange = mysqli_real_escape_string($connecDB,$_POST['posttags']);
  $userid = $_POST['updatetags'];

  $updatephoto = mysqli_query($connecDB,"update item set tags = '$datatochange' where id = $userid");
  if($updatephoto){
    $_SESSION['rmnotfymsg'] = '<p  class="alert alert-success"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>tags are updated</p>';
    header('location: '.$rdrlocation);
  }
  else {
    $_SESSION['rmnotfymsg'] = '<p  class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Failed to update tags</p>';
    header('location: '.$rdrlocation);
  }
}
else if(isset($_POST['updateshortinfo']) && is_numeric($_POST['updateshortinfo'])){
  $datatochange = mysqli_real_escape_string($connecDB,$_POST['shortinfo']);
  $userid = $_POST['updateshortinfo'];

  $updatephoto = mysqli_query($connecDB,"update item set shortinfo = '$datatochange' where id = $userid");
  if($updatephoto){
    $_SESSION['rmnotfymsg'] = '<p  class="alert alert-success"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Description is changed</p>';
    header('location: '.$rdrlocation);
  }
  else {
    $_SESSION['rmnotfymsg'] = '<p  class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Failed to update description<br>'.mysqli_error($connecDB).'</p>';
    header('location: '.$rdrlocation);
  }
}
else if(isset($_POST['updatepostbody']) && is_numeric($_POST['updatepostbody'])){
  $datatochange = mysqli_real_escape_string($connecDB,$_POST['postbody']);
  $userid = $_POST['updatepostbody'];

  $updatephoto = mysqli_query($connecDB,"update item set postbody = '$datatochange' where id = $userid");
  if($updatephoto){
    $_SESSION['rmnotfymsg'] = '<p  class="alert alert-success"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>item body is changed is updated</p>';
    header('location: '.$rdrlocation);
  }
  else {
    $_SESSION['rmnotfymsg'] = '<p  class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Failed to update item body<br>'.mysqli_error($connecDB).'</p>';
    header('location: '.$rdrlocation);
  }
}
else if(isset($_POST['updateauhor']) && is_numeric($_POST['updateauhor'])){
  $datatochange = mysqli_real_escape_string($connecDB,$_POST['postauthor']);
  $userid = $_POST['updateauhor'];

  $updatephoto = mysqli_query($connecDB,"update item set authorid = '$datatochange' where id = $userid");
  if($updatephoto){
    $_SESSION['rmnotfymsg'] = '<p  class="alert alert-success"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>item author is changed</p>';
    header('location: '.$rdrlocation);
  }
  else {
    $_SESSION['rmnotfymsg'] = '<p  class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Failed to update item author<br>'.mysqli_error($connecDB).'</p>';
    header('location: '.$rdrlocation);
  }
}
 ?>
