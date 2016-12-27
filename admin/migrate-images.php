<?php
include_once '../inc/configAll.php';

$selectitemquery = mysqli_query($connecDB,"select * from item order by id");

while($selectitem = mysqli_fetch_array($selectitemquery)){

  $selectitemimgsquery = mysqli_query($connecDB,"select * from itemphotos where itemid = ".$selectitem['id']);

  $imagepath1 = '../uploads/items/'.$selectitem['id'].'/original/';
  $oldimgpath1 = '../uploads/items/posts/original/';

  $imagepath2 = '../uploads/items/'.$selectitem['id'].'/full/';
  $oldimgpath2 = '../uploads/items/posts/1024/';

  $imagepath3 = '../uploads/items/'.$selectitem['id'].'/grid/';
  $oldimgpath3 = '../uploads/items/posts/360x230/';

  while($selectitemimgs = mysqli_fetch_array($selectitemimgsquery)){


    if (!file_exists($imagepath1.$selectitemimgs['photo'])) {
      if(file_exists($oldimgpath1.$selectitemimgs['photo'])){
        copy($oldimgpath1.$selectitemimgs['photo'], $imagepath1.$selectitemimgs['photo']);
      }
    }

    if (!file_exists($imagepath2.$selectitemimgs['photo'])) {
      if(file_exists($oldimgpath2.$selectitemimgs['photo'])){
        copy($oldimgpath2.$selectitemimgs['photo'], $imagepath2.$selectitemimgs['photo']);
      }
    }

    if (!file_exists($imagepath3.$selectitemimgs['photo'])) {
      if(file_exists($oldimgpath3.$selectitemimgs['photo'])){
        copy($oldimgpath3.$selectitemimgs['photo'], $imagepath3.$selectitemimgs['photo']);
      }
    }

  }

}
?>
