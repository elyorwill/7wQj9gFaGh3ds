<?php include 'header.php';?>
<?php include 'top-menu.php';?>
<!-- BEGIN CONTENT -->
  <!-- EMPTY BAR -->
  <section class="p-b-15 p-t-15 text-center text-white">
    <h3 class="inline text-white xs-m-b-20">&nbsp;</h3>
  </section>
<?php include 'nested-menu.php';?> 
    <!-- START USER SECTION -->
    <section style="background-color: #fff;">
      <div class="container">
        <div class="content-container clearfix">
          <div class="col-md-12">
            <h1 class="content-title">Setting Location</h1>
            <!-- nav tab -->
            <p class="text-left mail-tab">
            <a href="listing-new-3.php"><i class="fa fa-angle-left m-r-10" ></i>Back</a>
            </p>

            <hr>

            <div>
              <form class="new-space">

                <h5 class="m-t-30">Where does it located?</h5>
                <p>Pin point your space location!</p>
                <div class="row">
                  <div class="col-md-6 p-t-20">
                    <iframe src="http://www.map-generator.org/a4528b22-90a0-4ed6-9cf2-e4cc27075e18/iframe-map.aspx" scrolling="no" width="100%" height="400px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                  </div>
                  <div class="col-md-6 p-t-20">
                    <div class="row clearfix">
                      <div class="col-sm-6">
                        <div class="form-group form-group-default required">
                          <label>Longitude</label>
                          <input type="text" class="form-control" name="long" required>
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group form-group-default required">
                          <label>Latitude</label>
                          <input type="text" class="form-control" name="lat" required>
                        </div>
                      </div>
                    </div> <!-- /. row clearfix -->
                    <div class="form-group form-group-default required">
                      <label>Address Line 1</label>
                      <input type="text" class="form-control" name="phone" >
                    </div>
                    <div class="form-group form-group-default">
                      <label>Address Line 2</label>
                      <input type="text" class="form-control" name="phone" >
                    </div>
                    <div class="form-group form-group-default required">
                      <label>City</label>
                      <input type="text" class="form-control" name="phone" >
                    </div>
                    <div class="row clearfix">
                      <div class="col-sm-6">
                        <div class="form-group form-group-default required">
                          <label>Postcode</label>
                          <input type="text" class="form-control" name="name-f" required>
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group form-group-default required">
                          <label>State</label>
                          <select>
                            <option>Selangor</option>
                            <option>Kuala Lumpur</option>
                            <option>Perak</option>
                          </select>
                        </div>
                      </div>
                    </div> <!-- /. row clearfix -->
                    <button class="m-t-35 btn btn-danger btn-lg pull-right" type="submit">Next</button>
                  </div>
                </div> <!-- /. row -->
                <div class="row m-t-20">
                  <p class="text-help">
                    <span class="title">Tips!</span><br>
                    Don't worry, we only share your space exact location to confirmed guest only.
                  </p>
                </div>

                
              </form>
            </div>
            
        </div>
      </div>
    </div>
  </section>
    <!-- END USER SECTION -->

<!-- end page content -->

<?php include 'footer.php';?>
<!-- BEGIN YOUR CUSTOM JS -->

<!-- CUSTOM SCRIPT HERE -->


<!-- ./ END CUSTOM SCRIPT -->
<?php include 'end-html.php';?>