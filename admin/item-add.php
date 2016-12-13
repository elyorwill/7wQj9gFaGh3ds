
<?php
include_once '../inc/configAll.php';


include_once 'inc/head.php';

$_SESSION['rdrlocation'] = $currenturl;

//item price mode
$itempricemodequery = mysqli_query($connecDB,"select * from itempricemode");
$itempricemodes = '<select name="pricemode" required class="form-control">';
while($itempricemoderow = mysqli_fetch_array($itempricemodequery)){
  $itempricemodes .= '<option value="'.$itempricemoderow['pricemode'].'">'.$itempricemoderow['pricemode'].'</option>';
}
$itempricemodes .= '</select>';

//item category
$itemcategoryquery = mysqli_query($connecDB,"select * from itemcategory");
$itemcategories = '<select name="category" required class="form-control">';
while($itemcategoryrow = mysqli_fetch_array($itemcategoryquery)){
  $itemcategories .= '<option value="'.$itemcategoryrow['category'].'">'.$itemcategoryrow['category'].'</option>';
}
$itemcategories .= '</select>';

//users
$userslistquery = mysqli_query($connecDB,"select * from user");
$userslists = '<select name="ownerid" required class="form-control"><option value="">- Choose -</option>';
while($usersrow = mysqli_fetch_array($userslistquery)){
  $userslists .= '<option value="'.$usersrow['id'].'">'.$usersrow['fullname'].'</option>';
}
$userslists .= '</select>';

//countries
$countriesquery = mysqli_query($connecDB,"select * from all_countries");
$countrieslist = '<select name="country" required class="form-control"><option value="">- Choose -</option>';
while($countriesrow = mysqli_fetch_array($countriesquery)){
  $countrieslist .= '<option value="'.$countriesrow['id'].'">'.$countriesrow['country_name'].'</option>';
}
$countrieslist .= '</select>';


//latest items
$latestitemquery = mysqli_query($connecDB,"select * from item order by postdate desc limit 30");
$latestitemlist = '';
while($latestitemrow = mysqli_fetch_array($latestitemquery)){
  $latestitemlist .='<tr>';
  $latestitemlist .='<td>'.$latestitemrow['title'].'</td>';
  $latestitemlist .='<td>'.$latestitemrow['category'].'</td>';
  $latestitemlist .='<td>'.$latestitemrow['postdate'].'</td>';
  $latestitemlist .='<td>'.$latestitemrow['ownerid'].'</td>';
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
                            <li>
                                <i class="fa fa-table"></i>  <a href="items.php">Listings</a>
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
                <form action="../vals/itemadd.php" method="post" enctype="multipart/form-data">

                  <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group">
                         <a class="pull-right" href="user-add.php">+ Add new user</a>
                        <label>Listing owner *</label>
                        <?php
                        echo $userslists;
                         ?>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group">
                        <label>Listing Name *</label>
                        <input type="text" required name="itemname" class="form-control" placeholder="Enter a title">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Home Type *</label>
                        <select required name="hometype" class="form-control">
                        <option value="">Select...</option>
                        <option value="Apartment">Apartment</option>
                        <option value="House">House</option>
                        <option value="Bed &amp; Breakfast">Bed &amp; Breakfast</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Room type *</label>
                        <select required name="roomtype" class="form-control">
                        <option value="">Select...</option>
                        <option value="Entire">Entire</option>
                        <option value="Private">Private</option>
                        <option value="Shared">Shared</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>Accommodate *</label>
                        <input type="number" required name="accommodate" max="99" min="1" class="form-control" placeholder="Enter number">
                        </select>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>Bedrooms *</label>
                        <input type="number" max="99" min="1" name="bedrooms" class="form-control" placeholder="Enter number">
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>Bathrooms *</label>
                        <input type="number" required name="bathrooms" max="99" min="1" class="form-control" placeholder="Enter number">
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>Longtitude</label>
                        <input type="text" name="longitude" class="form-control">
                        </select>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>Lattitude</label>
                        <input type="text" name="latitude" class="form-control">
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>Post Code</label>
                        <input type="text" name="postcode" class="form-control">
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Country</label>
                        <?php
                        echo $countrieslist;
                         ?>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>City</label>
                        <input type="text" name="city" class="form-control" placeholder="Enter a city name">
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group">
                        <label>Address</label>
                        <input type="text" name="address" class="form-control" placeholder="Listing address">
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-sm-12">
                      <a href="#a" id="togglebtn">Show amenities</a>
                    </div>
                  </div>
                  <div id="toggleinfo" class="row alert alert-warning" style="display: none;">
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label><input name="amenity[]" type="checkbox" value="Kitchen"/> Kitchen</label>
                      </div>
                      <div class="form-group">
                        <label><input name="amenity[]" type="checkbox" value="Internet" /> Internet</label>
                      </div>
                      <div class="form-group">
                        <label><input name="amenity[]" type="checkbox" value="TV" /> TV</label>
                      </div>
                      <div class="form-group">
                        <label><input name="amenity[]" type="checkbox" value="Essentials" /> Essentials</label>
                      </div>
                      <div class="form-group">
                        <label><input name="amenity[]" type="checkbox" value="Shampoo" />  Shampoo</label>
                      </div>
                      <div class="form-group">
                        <label><input name="amenity[]" type="checkbox" value="Heating" /> Heating</label>
                      </div>
                      <div class="form-group">
                        <label><input name="amenity[]" type="checkbox" value="Air Conditioning" /> Air Conditioning</label>
                      </div>
                      <div class="form-group">
                        <label><input name="amenity[]" type="checkbox" value="Washer" /> Washer</label>
                      </div>
                      <div class="form-group">
                        <label><input name="amenity[]" type="checkbox" value="Dryer" /> Dryer</label>
                      </div>
                      <div class="form-group">
                        <label><input name="amenity[]" type="checkbox" value="Free Parking on Premises" /> Free Parking on Premises</label>
                      </div>

                    </div>

                    <div class="col-sm-4">
                      <div class="form-group">
                        <label><input type="checkbox" value="Wireless Internet" name="amenity[]" /> Wireless Internet</label>
                      </div>
                      <div class="form-group">
                        <label><input type="checkbox" value="Cable TV" name="amenity[]" /> Cable TV</label>
                      </div>
                      <div class="form-group">
                        <label><input type="checkbox" value="Breakfast" name="amenity[]" /> Breakfast</label>
                      </div>
                      <div class="form-group">
                        <label><input type="checkbox" value="Pets Allowed" name="amenity[]" /> Pets Allowed</label>
                      </div>
                      <div class="form-group">
                        <label><input type="checkbox" value="Family/Kid Friendly" name="amenity[]" /> Family/Kid Friendly</label>
                      </div>
                      <div class="form-group">
                        <label><input type="checkbox" value="Suitable for Events" name="amenity[]" /> Suitable for Events</label>
                      </div>
                      <div class="form-group">
                        <label><input type="checkbox" value="Smoking Allowed" name="amenity[]" /> Smoking Allowed</label>
                      </div>
                      <div class="form-group">
                        <label><input type="checkbox" value="Wheelchair Accessible" name="amenity[]" /> Wheelchair Accessible</label>
                      </div>
                      <div class="form-group">
                        <label><input type="checkbox" value="Elevator in Building" name="amenity[]" /> Elevator in Building</label>
                      </div>
                      <div class="form-group">
                        <label><input type="checkbox" value="Indoor Fireplace" name="amenity[]" /> Indoor Fireplace</label>
                      </div>
                    </div>

                    <div class="col-sm-4">

                      <div class="form-group">
                        <label><input type="checkbox" value="Buzzer/Wireless Interroom" name="amenity[]" /> Buzzer/Wireless Interroom</label>
                      </div>
                      <div class="form-group">
                        <label><input type="checkbox" value="Doorman" name="amenity[]" /> Doorman</label>
                      </div>
                      <div class="form-group">
                        <label><input type="checkbox" value="Pool" name="amenity[]" /> Pool</label>
                      </div>
                      <div class="form-group">
                        <label><input type="checkbox" value="Hot Tub" name="amenity[]" /> Hot Tub</label>
                      </div>
                      <div class="form-group">
                        <label><input type="checkbox" value="Gym" name="amenity[]" /> Gym</label>
                      </div>
                      <div class="form-group">
                        <label><input type="checkbox" value="24-Hour Check-in" name="amenity[]" /> 24-Hour Check-in</label>
                      </div>
                      <div class="form-group">
                        <label><input type="checkbox" value="Hangers" name="amenity[]" /> Hangers</label>
                      </div>
                      <div class="form-group">
                        <label><input type="checkbox" value="Iron" name="amenity[]" /> Iron</label>
                      </div>
                      <div class="form-group">
                        <label><input type="checkbox" value="Hair Dryer" name="amenity[]" /> Hair Dryer</label>
                      </div>
                      <div class="form-group">
                        <label><input type="checkbox" value="Laptop Friendly Workspace" name="amenity[]" /> Laptop Friendly Workspace</label>
                      </div>
                    </div>

                  </div>

                  <div class="row">
                    <div class="col-sm-6">
                      <label>Price *</label>
                      <div class="input-group">
              					<div class="input-group-addon">RM</div>
              					<input placeholder="number only" name="priceoriginal" required class="form-control" type="number" min="1" max="99999999999"  />
              				</div>

                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Price Mode *</label>
                        <?php
                        echo $itempricemodes;
                         ?>
                      </div>
                    </div>
                  </div>


                  <div class="row">
                    <div class="col-sm-6">
                      <label>Category *</label>
                      <?php
                      echo $itemcategories;
                       ?>

                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Choose photos *</label>
                        <input type="file" required name="upload[]" multiple="" accept="image/*" class="form-control">
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group">
                      <label>Description *</label>
                      <textarea  required name="description" class="form-control"></textarea>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <button type="submit" value="2" name="submitpost" class="btn btn-primary">Submit</button>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <button type="submit" value="3" name="submitpost" class="btn btn-default pull-right">Save to draft</button>
                      </div>
                    </div>
                  </div>

                </form>
              </div>

              <div class="col-lg-6">
                  <div class="table-responsive">
                    <a class="pull-right" href="items.php">View All listings</a>
                    <p>Latest Entries</p>
                      <table class="table table-bordered table-hover">
                          <thead>
                              <tr>
                                  <th>Title</th>
                                  <th>Category</th>
                                  <th>Postdate</th>
                                  <th>Owner ID</th>
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
