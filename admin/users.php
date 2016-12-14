
<?php

include_once '../inc/configAll.php';


include_once 'inc/head.php';

//fetch users into table
$userlistquery = mysqli_query($connecDB,"select * from user order by regdate desc");
$userlists = '';
while($userlistrow = mysqli_fetch_array($userlistquery)){
  $userlists .= '<tr>';
  $userlists .= '<td>'.$userlistrow['fullname'].'</td>';
  $userlists .= '<td>'.$userlistrow['email'].'</td>';
  $userlists .= '<td>'.$userlistrow['phone'].'</td>';
  $userlists .= '<td>'.$userlistrow['regdate'].'</td>';
  $userlists .= '<td>'.$userlistrow['regip'].'</td>';
  $userlists .= '<td><div class="input-group-btn">
                    <button type="button" class="btn btn-default dropdown-toggle btn-xs" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Options <span class="caret"></span></button>
                    <ul class="dropdown-menu dropdown-menu-right">
                      <li><a href="#">View Details</a></li>
                      <li><a href="#">Edit Profile</a></li>
                      <li><a href="#">Edit Address</a></li>
                      <li><a href="#">Change Photo</a></li>
                      <li><a href="#">Block</a></li>
                    </ul>
                  </div>
                </td>';
  $userlists .= '</tr>';
}


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
                            <li class="active">
                                <i class="fa fa-group"></i> Users
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-12">
                      <a href="user-add.php" class="pull-right btn btn-success btn-xs">+ Add new user</a>
                      <label>Registered Users</label>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Regdate</th>
                                        <th>RegIP</th>
                                        <th>Options</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    echo $userlists;
                                     ?>

                                </tbody>
                            </table>
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
