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
            <h1 class="content-title">Setting rental price</h1>
            <!-- nav tab -->
            <p class="text-left mail-tab">
            <a href="living-new.php"><i class="fa fa-angle-left m-r-10" ></i>Back</a>
            </p>

            <hr>

            <div>
              <form class="new-space">

                <h5 class="m-t-30">How are you going to charge for each stay?</h5>
                <div class="row">
                  <div class="col-sm-12">
                    <div class="rdimagecheck m-t-20" style="margin-left: -15px;">
                      <div class="rdimagecheck col-xs-2">
                        <input type="radio" name="price-type" value="day" id="price-day" checked>
                        <label for="price-day">
                          <img src="asset/image/day.png" />
                          <p>Daily</p>
                        </label>
                      </div>
                      <div class="rdimagecheck col-xs-2">
                        <input type="radio" name="price-type" value="week" id="price-week">
                        <label for="price-week">
                          <img src="asset/image/calendar.png" />
                          <p>Weekly</p>
                        </label>
                      </div>
                      <div class="rdimagecheck col-xs-2">
                        <input type="radio" name="price-type" value="month" id="price-month">
                        <label for="price-month">
                          <img src="asset/image/calendar.png" />
                          <p>Monthly</p>
                        </label>
                      </div>
                      <div class="rdimagecheck col-xs-2">
                        <input type="radio" name="price-type" value="year" id="price-year">
                        <label for="price-year">
                          <img src="asset/image/calendar.png" />
                          <p>Yearly</p>
                        </label>
                      </div>
                    </div>
                  </div>
                </div> <!-- /. row -->

                <br>

                <h5 class="m-t-30">Set your normal price rate</h5>
                <p class="text-help" style="margin-top: -10px;">
                  Set your space default price.
                </p>
            		<div class="row p-t-20">
                  <div class="col-sm-5">
                    <div class="form-group form-group-default">
                      <label class="pull-left p-b-10">Price</label>
                      <input type="text" class="form-control" id="price"/>
                    </div>
                  </div>
                  <div class="col-md-7">
                    <p class="text-help" style="margin-top: -10px;">
                      <span class="title">Tips!</span><br>
                      You can scout around your place and see the price range offered around your space as a guidance on how to set your space rental rate.
                    </p>
                  </div>
                </div> <!-- /. row -->

                <br>

                <h5 class="m-t-30">Add special price rate</h5>
                <div class="col-md-12">
                  <p class="text-help" style="margin-top: -10px; margin-left: -13px;">
                    Add any special rate price for any of your selected dates. You can add up to 3 types of rates.
                  </p>
                </div>
                <div class="row p-t-20 m-b-5">
                  <div class="col-sm-6">
                    <div class="form-group form-group-default">
                      <label class="pull-left p-b-10">Rate 1 title</label>
                      <input type="text" class="form-control" id="rate-name-1"/>
                    </div>
                  </div>
                  <div class="col-sm-5">
                    <div class="form-group form-group-default">
                      <label class="pull-left p-b-10">Price</label>
                      <input type="text" class="form-control" id="rate-price-1"/>
                    </div>
                  </div>
                  <div class="col-sm-1">
                    <button class="btn btn-danger btn-lg btn-block btn-bordered" style="height: 68px;" type="submit">Add</button>
                  </div>
                </div> <!-- /. row -->
                <div class="row m-t-5 m-b-5">
                  <div class="col-sm-6">
                    <div class="form-group form-group-default">
                      <label class="pull-left p-b-10">Rate 2 title</label>
                      <input type="text" class="form-control" id="rate-name-2"/>
                    </div>
                  </div>
                  <div class="col-sm-5">
                    <div class="form-group form-group-default">
                      <label class="pull-left p-b-10">Price</label>
                      <input type="text" class="form-control" id="rate-price-2"/>
                    </div>
                  </div>
                  <div class="col-sm-1">
                    <button class="btn btn-danger btn-lg btn-block btn-bordered" style="height: 68px;" type="submit">Add</button>
                  </div>
                </div> <!-- /. row -->
                <div class="row m-t-5">
                  <div class="col-sm-6">
                    <div class="form-group form-group-default">
                      <label class="pull-left p-b-10">Rate 3 title</label>
                      <input type="text" class="form-control" id="rate-name-3"/>
                    </div>
                  </div>
                  <div class="col-sm-5">
                    <div class="form-group form-group-default">
                      <label class="pull-left p-b-10">Price</label>
                      <input type="text" class="form-control" id="rate-price-3"/>
                    </div>
                  </div>
                  <div class="col-sm-1">
                    <button class="btn btn-danger btn-lg btn-block btn-bordered" style="height: 68px;" type="submit">Add</button>
                  </div>
                </div> <!-- /. row -->

                <h5 class="m-t-50">Add special price date</h5>
                <div class="col-md-12">
                  <p class="text-help" style="margin-top: -10px; margin-left: -13px;">
                    For any special rate that you've set, select the corresponding date range.
                  </p>
                </div>
                <div class="row p-t-20 m-b-5">
                  <div class="col-sm-6">                    
                    <div class="form-group form-group-default">
                      <label class="pull-left p-b-10" >Pick A Date</label>
                      <input type="text" class="form-control" name="specialdate" value="01/01/2015 1:30 PM - 01/01/2015 2:00 PM" />
                    </div>
                  </div>
                  <div class="col-sm-5">
                    <div class="form-group form-group-default" style="height: 68px;">
                      <label class="pull-left p-b-10">Select Special Rate</label>
                      <select class="full-width" data-placeholder="Select Rate" data-init-plugin="select2">
                        <option value="sd1">Rate 1 Title - RM 99.00 per night</option>
                        <option value="sd2">Rate 2 Title - RM 199.00 per night</option>
                        <option value="sd3">Rate 3 Title - RM 69.00 per night</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-sm-1">
                    <button class="btn btn-danger btn-lg btn-block btn-bordered" style="height: 68px;" type="submit">Add</button>
                  </div>
                </div> <!-- /. row -->

                <h5 class="m-t-50">Price Summary</h5>
                <div class="row p-b-20">
                  <div class="col-sm-8">
                    <table class="price-summary">
                      <thead>
                        <td>Selected Dates</td>
                        <td>Selected Setting</td>
                        <td>Price</td>
                      </thead>
                      <tr>
                        <td>24 Dec - 2 Jan</td>
                        <td>Rate 1 Title</td>
                        <td>RM 130.00 / per night</td>
                      </tr>
                      <tr>
                        <td>24 Dec - 2 Jan</td>
                        <td>Rate 1 Title</td>
                        <td>RM 130.00 / per night</td>
                      </tr>
                      <tr>
                        <td>24 Dec - 2 Jan</td>
                        <td>Rate 1 Title</td>
                        <td>RM 130.00 / per night</td>
                      </tr>
                    </table>
                  </div>
                  <div class="col-sm-4">
                  </div>
                </div> <!-- /. row -->
                
                <hr>

                <button class="btn btn-danger btn-lg pull-right" type="submit">Next</button>
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