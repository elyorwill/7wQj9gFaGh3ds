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
                        <input type="radio" name="price-type" value="hour" id="price-hour">
                        <label for="price-hour">
                          <img src="asset/image/clock.png" />
                          <p>Hourly</p>
                        </label>
                      </div>
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

                <h5 class="m-t-30">Set your price</h5>
            		<div class="row p-t-20">
                  <div class="col-sm-5">
                    <div class="form-group form-group-default">
                      <label class="pull-left p-b-10">Price</label>
                      <input type="text" class="form-control"  <input id="price"/>
                    </div>
                  </div>
                  <div class="col-md-7">
                    <p class="text-help p-l-20" style="margin-top: -10px;">
                      <span class="title">Tips!</span><br>
                      You can scout around your place and see the price range offered around your space as a guidance on how to set your space rental rate.
                    </p>
                  </div>
                </div> <!-- /. row -->


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