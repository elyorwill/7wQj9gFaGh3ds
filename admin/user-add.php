
<?php

include_once '../inc/configAll.php';


include_once 'inc/head.php';

$_SESSION['rdrlocation'] = $currenturl;

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
                                <i class="fa fa-group"></i>  <a href="users.php">Users</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-plus"></i> Add New
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="col-md-6">
                  <?php
                  echo $notficationmsg;
                   ?>
                <form action="../vals/userregister.php" method="post" enctype="multipart/form-data">

                  <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group">
                        <label>Full Name *</label>
                        <input type="text" required name="fullname" class="form-control" placeholder="Enter user's name">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Enter user's email">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Phone</label>
                        <input type="text" name="phone" class="form-control" placeholder="Enter user's phone">
                      </div>
                    </div>
                  </div>


                  <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group">
                        <label>Image/Logo</label>
                        <input type="file" name="image" class="form-control">
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group">
                      <label>Description</label>
                      <textarea  name="description" class="form-control"></textarea>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <button type="submit" name="submituserform" value="admin" class="btn btn-primary">Submit</button>
                      </div>
                    </div>
                  </div>

                </form>
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

    <style>
    #toggleinfo .form-group input{
      vertical-align: -2px;
    }
    #toggleinfo .form-group label{
      font-size: 11px;
    }
    </style>
    <script>
    $( "#togglebtn" ).click(function() {
      $( "#toggleinfo" ).slideToggle( "fast", function() {
        // Animation complete.
      });
    });
    </script>

</body>

</html>
