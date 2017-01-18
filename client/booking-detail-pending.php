<?php include 'header.php';?>
<?php include 'top-menu.php';?>
<!-- BEGIN CONTENT -->
  <!-- EMPTY BAR -->
  <section class="p-b-15 p-t-15 text-center text-white">
    <h3 class="inline text-white xs-m-b-20">&nbsp;</h3>
  </section>
  <!-- /. EMPTY BAR -->
<?php include 'nested-menu.php';?> 
  
    <!-- START USER SECTION -->
    <section style="background-color: #fff;">
      <div class="container">
        <div class="content-container clearfix">
          <div class="col-md-12">
            <h1 class="content-title">Booking Details</h1>
            <!-- nav tab -->
            <p class="text-left mail-tab">
            <a href="trip.php"><i class="fa fa-angle-left m-r-10" ></i>Return to trip listing</a>
            </p>

            <hr>

            <div class="pull-right">
              <span class="label label-warning text-uppercase">Pending Payment</span>
            </div>
            <h3><a  href="space-detail.php" style="color: #333; font-weight: 500;">Casuarina @ Meru</a>
              <span class="p-l-30 text-warning"><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i></span>
            </h3>
            <h5 class="hint-text">1-C Jalan Meru Casuarina, Meru Jaya, Ipoh, Malaysia</h5>

            <div class="row booking-highlight-base">
              <div class="col-md-4">
                <p><i class="fa fa-calendar p-r-10"></i>Check-in Date</p>
                <h1>23 January 2017</h1>
              </div>
              <div class="col-md-4">
                <p><i class="fa fa-calendar p-r-10"></i>Check-out Date</p>
                <h1>25 January 2017</h1>
              </div>
              <div class="col-md-4">
                <p><i class="fa fa-credit-card p-r-10"></i>Total Price</p>
                <h1>RM 234.30</h1>
              </div>
            </div>
            
            <hr class="m-t-40">

            <div class="row p-b-20">
              <div class="col-sm-6">
                <h5 class="m-t-20 block-title text-danger">Guest Details</h5>
                <table class="price-summary" style="margin-top: -40px;">
                  <tr>
                    <td style="width: 50%">&nbsp;</td>
                    <td style="width: 50%">&nbsp;</td>
                  </tr>
                  <tr>
                    <td class="title">LEAD GUEST NAME</td>
                    <td>Wan Ahmad Akmal Arif bin Wan Mohamad</td>
                  </tr>
                  <tr>
                    <td class="title">RESERVATIONS</td>
                    <td>3 Days &amp; 2 Nights</td>
                  </tr>
                  <tr>
                    <td class="title">NUMBER OF GUEST(S)</td>
                    <td>2 guests</td>
                  </tr>
                </table>

                <br>

                <h5 class="m-t-40 block-title text-danger">Payment Details</h5>
                <div>
                  <p class="text-help">
                      <span style="color:#333;">No payment details yet!</span><br>
                      Complete your booking by completing your payment to avoid any disruptions due to late payment.
                    </p>
                  <button class="btn block-title btn-lg btn-danger bold m-t-20">Pay Now</button>
                </div>
                <!-- pending payment
                <table class="price-summary" style="margin-top: -40px;">
                  <tr>
                    <td style="width: 50%">&nbsp;</td>
                    <td style="width: 50%">&nbsp;</td>
                  </tr>
                  <tr>
                    <td class="title">CARD HOLDER NAME</td>
                    <td>Ahmad Ali</td>
                  </tr>
                  <tr>
                    <td class="title">CARD TYPE</td>
                    <td>Visa</td>
                  </tr>
                  <tr>
                    <td class="title">CARD NUMBER</td>
                    <td>xxxx - xxxx - xxxx - 4444</td>
                  </tr>
                  <tr>
                    <td class="title">EXPIRY DATE</td>
                    <td>12/22</td>
                  </tr>
                </table>

                -->
              </div>
              

              <div class="col-md-6" style="margin-top: 30px;">
                <div class="booking">
                  <h6 class="block-title text-danger m-t-20">Rate your stay</h6>
                  <h3 class="bold">Casuarina@Meru</h3>
                  <form class="p-t-10" role="form">
                    <div class="row">
                      <div id="" class="form-group form-group-default" style="padding-bottom: 4px;">
                        <label class="pull-left p-b-10">your review</label>
                        <textarea rows="3" class="form-control" style="border:none !important;" disabled></textarea>
                      </div>
                    </div> <!-- /. row -->
                    <div class="row">
                      <div class="col-sm-12">
                        <h6 class="block-title text-danger p-t-10">rate your stay</h6>
                        <ul class="c-rating" id="el"></ul>
                      </div>
                    </div> <!-- /. row -->
                  </form>
                  
                  <hr>
                  <button class="btn btn-block block-title btn-lg btn-danger bold" disabled>Submit Rating</button>
                </div>
              </div>

            </div>   <!-- /. row -->
                
            
            
        </div>
      </div>
    </div>
  </section>
    <!-- END USER SECTION -->

<!-- END CONTENT --> 
<?php include 'footer.php';?>
<!-- CUSTOM SCRIPT -->



<!-- ./ END CUSTOM SCRIPT -->
<?php include 'end-html.php';?>