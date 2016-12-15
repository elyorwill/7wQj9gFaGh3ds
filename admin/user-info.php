
<?php

include_once '../inc/configAll.php';


include_once 'inc/head.php';


if(isset($_GET['id'])){

$_SESSION['rdrlocation'] = $currenturl;

$userid = mysqli_real_escape_string($connecDB,$_GET['id']);



//fetch user details
$userinfocheck = mysqli_fetch_array(mysqli_query($connecDB,"select id, fullname from user where id = $userid"));

if(!empty($userinfocheck['id'])){

$userid = $userinfocheck['id'];

$userdetailscol='';

$activeusernavprofile='';
$activeusernavaddress='';
$activeusernavphoto='';
$activeusernavloginlogs='';

if(isset($_GET['address'])){

  $useraddress = mysqli_fetch_array(mysqli_query($connecDB,"select * from address where userid = $userid"));

  $activeusernavaddress='active';
  $userdetailscol .= '<div class="panel panel-default">
          <div class="panel-heading">
              <h3 class="panel-title">Address</h3>
          </div>
          <div class="panel-body">
          <table class="table">
            <tr><td>Address:</td><td>'.$useraddress['address'].'</td><td><a href="#">Edit</a></td></tr>
            <tr><td>Postcode:</td><td>'.$useraddress['postcode'].'</td><td><a href="#">Edit</a></td></tr>
            <tr><td>City:</td><td>'.$useraddress['city'].'</td><td><a href="#">Edit</a></td></tr>
            <tr><td>Country:</td><td>'.$useraddress['country'].'</td><td><a href="#">Edit</a></td></tr>
          </table>
          </div>
      </div>';
}
else if(isset($_GET['photo'])){

  $userinfo = mysqli_fetch_array(mysqli_query($connecDB,"select photo from user where id = $userid"));

  if(empty($userinfo['photo']))
    $userphotoandpath = 'http://placehold.it/320x320';
  else {
    $userphotoandpath = $_SESSION['shomeurl'].'/uploads/users/thumb/'.$userinfo['photo'];
  }

  $activeusernavphoto='active';
  $userdetailscol .= '<div class="panel panel-default">
                          <div class="panel-heading">
                              <h3 class="panel-title">Logo / Image</h3>
                          </div>
                          <div class="panel-body">
                          <div class="col-md-6"><img src="'.$userphotoandpath.'" /></div>
                          <div class="col-md-6">
                          <form enctype="multipart/form-data">
                          <label>Add new Photo</label>
                          <input  class="form-control" type="file">
                          <button  class="form-control btn btn-primary">Upload</button>
                          </form>
                          </div>
                          </div>
                      </div>';
}
else if(isset($_GET['loginlogs'])){
  $activeusernavloginlogs='active';
  $userdetailscol .= '<div class="panel panel-default">
          <div class="panel-heading">
              <h3 class="panel-title">Login Logs</h3>
          </div>
          <div class="panel-body">
          <table class="table">
            <tr><td>Date</td><td>IP</td><td>Browser</td></tr>
            <tr><td>Date</td><td>IP</td><td>Browser</td></tr>
            <tr><td>Date</td><td>IP</td><td>Browser</td></tr>
          </table>
          </div>
      </div>';
}
else{
  $userinfo = mysqli_fetch_array(mysqli_query($connecDB,"select * from user where id = $userid"));

  if(empty($userinfo['photo']))
    $userphotoandpath = 'http://placehold.it/120x120';
  else {
    $userphotoandpath = $_SESSION['shomeurl'].'/uploads/users/thumb/'.$userinfo['photo'];
  }
  $activeusernavprofile='active';
  $userdetailscol .= '<div class="panel panel-default">
          <div class="panel-heading">
              <h3 class="panel-title">Profile</h3>
          </div>
          <div class="panel-body">
            <div class="col-md-3">
              <img class="img-responsive" src="'.$userphotoandpath.'" />
              <p class="text-center"><a href="?id='.$userid.'&photo">Change image</a></p>
            </div>
            <div class="col-md-9">
              <table class="table">
                <tr><td>Name:</td><td>'.$userinfo['fullname'].'</td><td><a href="#">Edit</a></td></tr>
                <tr><td>Email:</td><td>'.$userinfo['email'].'</td><td><a href="#">Edit</a></td></tr>
                <tr><td>Phone:</td><td>'.$userinfo['phone'].'</td><td><a href="#">Edit</a></td></tr>
                <tr><td>Login ID:</td><td>'.$userinfo['username'].'</td><td></td></tr>
                <tr><td>Description:</td><td>'.$userinfo['description'].'</td><td><a href="#">Edit</a></td></tr>
                <tr><td>Registered DateTime:</td><td>'.$userinfo['regdate'].'</td><td></td></tr>
                <tr><td>Registered IP:</td><td>'.$userinfo['regip'].'</td><td></td></tr>
                <tr><td>Status:</td><td>'.$userinfo['status'].'</td><td><a href="#">Edit</a></td></tr>
                <tr><td colspan="3"><a href="../vals/usermodify.php?deleteuser='.$userinfo['id'].'&userphoto='.$userinfo['photo'].'&name='.$userinfo['fullname'].'" class="text text-danger" onclick="return confirm(\'Are you sure you want to delete '.$userinfo['fullname'].'?\');"><i class="fa fa-times"></i> Delete user</a></td></tr>
              </table>
            </div>
          </div>
      </div>';
}

$userdetailsnav = '<div class="list-group">
                      <a href="?id='.$userid.'&profile" class="list-group-item '.$activeusernavprofile.'">Profile</a>
                      <a href="?id='.$userid.'&address" class="list-group-item '.$activeusernavaddress.'">Address</a>
                      <a href="?id='.$userid.'&photo" class="list-group-item '.$activeusernavphoto.'">Photo</a>
                      <a href="?id='.$userid.'&loginlogs" class="list-group-item '.$activeusernavloginlogs.'">Login Logs</a>
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
                                <i class="fa fa-group"></i>  <a href="users.php">users</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-user"></i> <?php echo $userinfocheck['fullname']; ?>
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
  $_SESSION['rmnotfymsg'] = '<p class="alert alert-warning"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>User is not found. Either he/she is removed or not registered yet</p>';
  header('location: users.php');
}

}
else {
  $_SESSION['rmnotfymsg'] = '<p class="alert alert-warning"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Select a user to see details</p>';
  header('location: users.php');
}
 ?>
