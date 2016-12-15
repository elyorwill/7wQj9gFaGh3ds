
<?php

include_once '../inc/configAll.php';


include_once 'inc/head.php';


if(isset($_GET['id'])){

$_SESSION['rdrlocation'] = $currenturl;

$itemid = mysqli_real_escape_string($connecDB,$_GET['id']);



//fetch user details
$iteminfocheck = mysqli_fetch_array(mysqli_query($connecDB,"select id from item where id = $itemid"));

if(!empty($iteminfocheck['id'])){

$itemid = $iteminfocheck['id'];

$userdetailscol='';

$activeusernavprofile='';
$activeusernavaddress='';
$activeusernavphoto='';
$activeusernavloginlogs='';

if(isset($_GET['host'])){

  $itemhost = mysqli_fetch_array(mysqli_query($connecDB,"select i.hostid, u.fullname from item i left join user u on u.id = i.hostid where i.id = $itemid"));

  if(empty($itemhost['fullname']))
  $itemhost['fullname'] = '[not found]';
  $activeusernavaddress='active';
  $userdetailscol .= '<div class="panel panel-default">
          <div class="panel-heading">
              <h3 class="panel-title">Host</h3>
          </div>
          <div class="panel-body">
          <table class="table">
            <tr><td>Host name:</td><td>'.$itemhost['fullname'].'</td><td><a href="#">Change</a></td></tr>
          </table>
          </div>
      </div>';
}
else if(isset($_GET['photos'])){

  $activeusernavphoto='active';

  $itemphotosquery = mysqli_query($connecDB,"select * from itemphotos where itemid = $itemid order by sortnum");

  $itemphotoandpath = $_SESSION['shomeurl'].'/uploads/items/'.$itemid.'/';

  $userdetailscol .= '<div class="panel panel-default">
          <div class="panel-heading">
              <a href="#" class="pull-right btn btn-xs btn-default"><i class="fa fa-plus"></i> Add new photo</a>
              <h3 class="panel-title">Photos</h3>
          </div>
          <div class="panel-body"><div class="col-md-12"><p>One of the lowest sort number is cover photo</p></div>';

  $itemtotalphotos = mysqli_num_rows($itemphotosquery);
  while ($itemphotorow = mysqli_fetch_array($itemphotosquery)) {

    $selectsortnum = '<select class="btn btn-xs">';

    $i=1;
    while($i<=$itemtotalphotos){
      if($itemphotorow['sortnum'] == $i)
      $selectsortnum .= '<option selected>'.$i.'</option>';
      else
      $selectsortnum .= '<option>'.$i.'</option>';
      $i++;
    }
    $selectsortnum .= '</select>';

    $userdetailscol .= '<div class="col-md-4 thumb"><p class="thumbnail"><img class="img-responsive" src="'.$itemphotoandpath.'grid/'.$itemphotorow['photo'].'" />
    Sort: '.$selectsortnum.'
    <a class="text-danger pull-right" href="#" title="Delete"><i class="fa fa-times"></i></a></p></div>';
  }

  $userdetailscol .= '</div>
</div>';



}
else if(isset($_GET['amenities'])){
  $activeusernavloginlogs='active';

  $iteminfo = mysqli_fetch_array(mysqli_query($connecDB,"select amenities from item where id = $itemid"));

  $itemamenityarray = explode(',', $iteminfo['amenities']);
  $itemamenitycol = '';
  foreach($itemamenityarray as $itemamenity){
    $itemamenitycol .= ' <label class="label label-info">'.$itemamenity.'</label> ';
  }
  $userdetailscol .= '<div class="panel panel-default">
                          <div class="panel-heading">
                          <a href="#" class="pull-right btn btn-xs btn-default"><i class="fa fa-pencil"></i> Update Amenities</a>
                              <h3 class="panel-title">Amenities</h3>
                          </div>
                          <div class="panel-body">
                          '.$itemamenitycol.'
                          </div>
                      </div>';
}
else{
  $iteminfo = mysqli_fetch_array(mysqli_query($connecDB,"select * from item i left join itemprice ip on ip.listid = i.id where i.id = $itemid"));

  $activeusernavprofile='active';
  $userdetailscol .= '<div class="panel panel-default">
          <div class="panel-heading">
              <h3 class="panel-title">General Details</h3>
          </div>
          <div class="panel-body">
              <table class="table table-hover">
                <tr><td>Listing Title:</td><td>'.$iteminfo['title'].'</td><td><a href="#">Edit</a></td></tr>
                <tr><td>Price:</td><td>'.$iteminfo['pricecurrency'].''.$iteminfo['priceoriginal'].' '.$iteminfo['pricemode'].'</td><td><a href="#">Edit</a></td></tr>
                <tr><td>SEO URL:</td><td>'.$iteminfo['url'].'</td><td></td></tr>
                <tr><td>Category:</td><td>'.$iteminfo['category'].'</td><td><a href="#">Edit</a></td></tr>
                <tr><td>Home type:</td><td>'.$iteminfo['hometype'].'</td><td><a href="#">Edit</a></td></tr>
                <tr><td>Room type:</td><td>'.$iteminfo['roomtype'].'</td><td><a href="#">Edit</a></td></tr>
                <tr><td>Accommodates:</td><td>'.$iteminfo['accommodate'].'</td><td><a href="#">Edit</a></td></tr>
                <tr><td>Bedrooms:</td><td>'.$iteminfo['bedrooms'].'</td><td><a href="#">Edit</a></td></tr>
                <tr><td>Bathrooms:</td><td>'.$iteminfo['bathrooms'].'</td><td><a href="#">Edit</a></td></tr>
                <tr><td>Amenities:</td><td>'.$iteminfo['amenities'].'</td><td><a href="#">Edit</a></td></tr>
                <tr><td>Description:</td><td>'.$iteminfo['info'].'</td><td><a href="#">Edit</a></td></tr>
                <tr><td>Posted date:</td><td>'.$iteminfo['postdate'].'</td><td></td></tr>
                <tr><td>Posted IP:</td><td>'.$iteminfo['postip'].'</td><td></td></tr>
                <tr><td colspan="3"><a href="../vals/itemmodify.php?deleteitem='.$iteminfo['id'].'&title='.$iteminfo['title'].'" class="text text-danger" onclick="return confirm(\'Are you sure you want to delete '.$iteminfo['title'].'?\');"><i class="fa fa-times"></i> Delete Listing</a></td></tr>
              </table>
          </div>
      </div>';
}

$userdetailsnav = '<div class="list-group">
                      <a href="?id='.$itemid.'&general" class="list-group-item '.$activeusernavprofile.'">General Info</a>
                      <a href="?id='.$itemid.'&host" class="list-group-item '.$activeusernavaddress.'">Host</a>
                      <a href="?id='.$itemid.'&photos" class="list-group-item '.$activeusernavphoto.'">Photos</a>
                      <a href="?id='.$itemid.'&amenities" class="list-group-item '.$activeusernavloginlogs.'">Amenities</a>
                  </div>';
 ?>

<body>

    <div id="wrapper">

      <?php

      include_once 'inc/nav.php';

       ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.php">Dashboard</a>
                            </li>
                            <li>
                                <i class="fa fa-table"></i>  <a href="items.php">Listings</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> <?php echo $iteminfocheck['id']; ?>
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-12">
                      <?php
                      echo $notficationmsg;
                       ?>
                      <div class="col-md-4">

                          <?php
                          echo $userdetailsnav;
                           ?>

                      </div>
                      <div class="col-md-8">

                        <?php
                        echo $userdetailscol;
                         ?>

                      </div>
                    </div>
                </div>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
<?php
}
else {
  $_SESSION['rmnotfymsg'] = '<p class="alert alert-warning"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Listing is not found. Either it is removed or not registered yet</p>';
  header('location: items.php');
}

}
else {
  $_SESSION['rmnotfymsg'] = '<p class="alert alert-warning"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Select an item to see details</p>';
  header('location: items.php');
}
 ?>
