
<?php
include_once '../inc/configAll.php';


include_once 'inc/head.php';

//latest items
$latestitemquery = mysqli_query($connecDB,"select i.id, i.title, p.pricecurrency as currency, p.priceoriginal as price, p.pricemode,
                                            i.category, i.hometype, i.roomtype, i.accommodate, i.bedrooms, i.bathrooms, u.fullname, i.postdate,
                                            u.id as uid, count(ph.id) as totalphotos
                                            from item i
                                            left join user u on i.hostid = u.id
                                            left join itemprice p on i.id = p.listid
                                            left join itemlocation l on i.id = l.listid
                                            left join itemphotos ph on i.id = ph.itemid
                                            group by i.id
                                            order by i.postdate desc");
$latestitemlist = '';
while($latestitemrow = mysqli_fetch_array($latestitemquery)){



  if(empty($latestitemrow['fullname']))
  $latestitemrow['fullname'] = "[not found]";
  else
  $latestitemrow['fullname'] = '<a href="user-info.php?id='.$latestitemrow['uid'].'">'.$latestitemrow['fullname'].'</a>';

  $latestitemlist .='<tr>';
  $latestitemlist .='<td><a href="item-info.php?id='.$latestitemrow['id'].'">'.$latestitemrow['title'].'</a></td>';
  $latestitemlist .='<td>'.$latestitemrow['totalphotos'].'</td>';
  $latestitemlist .='<td>'.$latestitemrow['currency'].''.$latestitemrow['price'].' '.$latestitemrow['pricemode'].'</td>';
  $latestitemlist .='<td>'.$latestitemrow['category'].'</td>';
  $latestitemlist .='<td>'.$latestitemrow['hometype'].'</td>';
  $latestitemlist .='<td>'.$latestitemrow['roomtype'].'</td>';
  $latestitemlist .='<td>'.$latestitemrow['accommodate'].'</td>';
  $latestitemlist .='<td>'.$latestitemrow['bedrooms'].'</td>';
  $latestitemlist .='<td>'.$latestitemrow['bathrooms'].'</td>';
  $latestitemlist .='<td>'.$latestitemrow['fullname'].'</td>';
  $latestitemlist .='<td>'.$latestitemrow['postdate'].'</td>';
  $latestitemlist .='<td><div class="input-group-btn">
                    <button type="button" class="btn btn-default dropdown-toggle btn-xs" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Options <span class="caret"></span></button>
                    <ul class="dropdown-menu dropdown-menu-right">
                      <li><a href="item-info.php?id='.$latestitemrow['id'].'&general">General Details</a></li>
                      <li><a href="item-info.php?id='.$latestitemrow['id'].'&photos">Photos</a></li>
                      <li><a href="item-info.php?id='.$latestitemrow['id'].'&host">Host info</a></li>
                      <li><a href="item-info.php?id='.$latestitemrow['id'].'&amenities">Amenities</a></li>
                    </ul>
                  </div></td>';
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
                      <label>
                        <select class="btn btn-xs">
                          <option value="">All Listings</option>
                          <option value="">Public Listings</option>
                          <option value="">Pending Listings</option>
                          <option value="">Listings in Drafts</option>
                          <option value="">Listings in Trash</option>
                        </select>
                      </label>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th><i title="Accommodates" class="fa fa-camera"></i></th>
                                        <th>Price</th>
                                        <th>Category</th>
                                        <th>Home</th>
                                        <th>Room</th>
                                        <th><i title="Accommodates" class="fa fa-home"></i></th>
                                        <th><i title="Bedrooms" class="fa fa-bed"></i></th>
                                        <th><i title="Bathrooms" class="fa fa-bath"></i></th>
                                        <th>Host</th>
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
