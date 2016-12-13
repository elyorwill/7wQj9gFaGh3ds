
<?php
include_once '../inc/configAll.php';


include_once 'inc/head.php';

//latest items
$latestitemquery = mysqli_query($connecDB,"select * from item i
                                            left join user u on i.ownerid = u.id
                                            left join itemprice p on i.id = p.listid
                                            left join itemlocation l on i.id = l.listid
                                            order by i.postdate desc");
$latestitemlist = '';
while($latestitemrow = mysqli_fetch_array($latestitemquery)){
  $latestitemlist .='<tr>';
  $latestitemlist .='<td>'.$latestitemrow['title'].'</td>';
  $latestitemlist .='<td>'.$latestitemrow['pricecurrency'].''.$latestitemrow['priceoriginal'].' '.$latestitemrow['pricemode'].'</td>';
  $latestitemlist .='<td>'.$latestitemrow['category'].'</td>';
  $latestitemlist .='<td>'.$latestitemrow['hometype'].'</td>';
  $latestitemlist .='<td>'.$latestitemrow['roomtype'].'</td>';
  $latestitemlist .='<td>'.$latestitemrow['accommodate'].'</td>';
  $latestitemlist .='<td>'.$latestitemrow['bedrooms'].'</td>';
  $latestitemlist .='<td>'.$latestitemrow['bathrooms'].'</td>';
  $latestitemlist .='<td>'.$latestitemrow['fullname'].'</td>';
  $latestitemlist .='<td>'.$latestitemrow['postdate'].'</td>';
  $latestitemlist .='<td>...</td>';
  $latestitemlist .='</tr>';
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
                                <i class="fa fa-table"></i> Listings
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-12">
                      <a href="item-add.php" class="pull-right btn btn-success btn-xs">+ Add new listing</a>
                      <label>Listings</label>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th>Price</th>
                                        <th>Category</th>
                                        <th>Home</th>
                                        <th>Room</th>
                                        <th><i title="Accommodates" class="fa fa-home"></i></th>
                                        <th><i title="Bedrooms" class="fa fa-bed"></i></th>
                                        <th><i title="Bathrooms" class="fa fa-bath"></i></th>
                                        <th>Owner</th>
                                        <th>Postdate</th>
                                        <th>Options</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    echo $latestitemlist;
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
