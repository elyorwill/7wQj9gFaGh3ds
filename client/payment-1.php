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
            <h1 class="content-title">Make Payment</h1>
            <!-- nav tab -->
            <p class="text-left mail-tab">
            <a href="trip.php"><i class="fa fa-angle-left m-r-10" ></i>Return to trip details</a>
            </p>

            <hr class="m-b-30">
            <div class="row">
              <div class="col-md-3 sq-img-sm">
                <img src="asset/image/square-500.jpg" class="pull-left">
              </div>
              <div class="col-md-9" style="margin-top: -5px;">
                <p class="booking-id pull-right m-t-15">114215765</p>
                <h3 class="booking-name">Casuarina@Meru</h3>
                <p class="booking-address">1-C Jalan Meru Casuarina, Bandar Meru Raya, Ipoh, Malaysia</p>
                <div class="row booking-highlight-base m-t-10">
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
              </div>
            </div>
            
            <hr class="m-t-10">

            <div class="row p-b-20">
              <div class="col-sm-12">
                <h5 class="m-t-20 block-title text-danger">Select Payment method</h5>
                
                <div class="row m-t-20">
                  <div class="col-xs-4">
                    <a data-toggle="tab" href="#cc">
                      <div class="type-listing">
                        <img class="lg" src="asset/image/paymentcc.jpg" />
                      </div>
                    </a>
                  </div>

                  <div class="col-xs-4">
                    <a data-toggle="tab" href="#fpx">
                      <div class="type-listing">
                        <img class="lg" src="asset/image/paymentfpx.jpg" />
                      </div>
                    </a>
                  </div>

                  <div class="col-xs-4">
                    <a data-toggle="tab" href="#pp">
                      <div class="type-listing">
                        <img class="lg" src="asset/image/paymentpp.jpg" />
                      </div>
                    </a>
                  </div>

                </div> <!-- /. row -->

                <div class="tab-content m-t-50">

                  <div class="tab-pane active" id="cc">
                    <form id="form-project" role="form" autodanger="on">
                      <p>Credit Card Information</p>
                        <div class="row clearfix">
                          <div class="col-md-12">
                            <div class="form-group form-group-default required">
                              <label>Card Holder Name</label>
                              <input type="text" class="form-control" name="name-f" required>
                            </div>
                          </div>
                        </div> <!-- /. row clearfix -->
                        <div class="row clearfix">
                          <div class="col-md-12">
                            <div class="form-group form-group-default required">
                              <label>Card Number</label>
                              <input type="text" class="form-control" name="name-f" required>
                            </div>
                          </div>
                        </div> <!-- /. row clearfix -->
                        <div class="row clearfix">
                          <div class="col-md-4">
                            <div class="form-group form-group-default required">
                              <label>Month</label>
                              <input type="text" class="form-control" name="name-f" required>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group form-group-default required">
                              <label>Year</label>
                              <input type="text" class="form-control" name="name-f" required>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group form-group-default required">
                              <label>CVV</label>
                              <input type="text" class="form-control" name="name-f" required>
                            </div>
                          </div>
                        </div> <!-- /. row clearfix -->
                        
                        <div class="pull-right m-t-20">
                            <button class="btn btn-lg btn-danger block-title" type="submit">Proceed with payment</button>
                        </div>
                      </form>
                  </div>

                  <div class="tab-pane" id="fpx">
                    <p>Select preferred bank</p>
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="rdbank m-t-20">
                          <div class="rdbank col-md-3 col-sm-4 col-xs-6">
                            <input type="radio" name="fpx-type" value="day" id="fpx-mb" checked>
                            <label for="fpx-mb">
                              <img class="bank" src="asset/image/bank/mb.jpg" alt="">
                            </label>
                          </div>
                          <div class="rdbank col-md-3 col-sm-4 col-xs-6">
                            <input type="radio" name="fpx-type" value="week" id="fpx-cimb">
                            <label for="fpx-cimb">
                              <img class="bank" src="asset/image/bank/cimb.jpg" alt="">
                            </label>
                          </div>
                          <div class="rdbank col-md-3 col-sm-4 col-xs-6">
                            <input type="radio" name="fpx-type" value="month" id="fpx-hlb">
                            <label for="fpx-hlb">
                              <img class="bank" src="asset/image/bank/hlb.jpg" alt="">
                            </label>
                          </div>
                          <div class="rdbank col-md-3 col-sm-4 col-xs-6">
                            <input type="radio" name="fpx-type" value="year" id="fpx-bi">
                            <label for="fpx-bi">
                              <img class="bank" src="asset/image/bank/bi.jpg" alt="">
                            </label>
                          </div>
                          <div class="rdbank col-md-3 col-sm-4 col-xs-6">
                            <input type="radio" name="fpx-type" value="day" id="fpx-rhb" checked>
                            <label for="fpx-rhb">
                              <img class="bank" src="asset/image/bank/rhb.jpg" alt="">
                            </label>
                          </div>
                          <div class="rdbank col-md-3 col-sm-4 col-xs-6">
                            <input type="radio" name="fpx-type" value="week" id="fpx-pb">
                            <label for="fpx-pb">
                              <img class="bank" src="asset/image/bank/pb.jpg" alt="">
                            </label>
                          </div>
                          <div class="rdbank col-md-3 col-sm-4 col-xs-6">
                            <input type="radio" name="fpx-type" value="month" id="fpx-hsbc">
                            <label for="fpx-hsbc">
                              <img class="bank" src="asset/image/bank/hsbc.jpg" alt="">
                            </label>
                          </div>
                        </div>
                      </div>
                    </div> <!-- /. row -->
                    
                    <div class="pull-right m-t-20">
                        <button class="btn btn-lg btn-danger block-title" type="submit">Proceed with selected bank</button>
                    </div>
                  </div>

                  <div class="tab-pane" id="pp">
                    <div class="pull-right">
                        <button class="btn btn-lg btn-danger block-title" type="submit">Checkout with PayPal</button>
                    </div>
                    <p>Paypal Checkout</p>
                  </div>

                           
                </div> <!-- /. tab content -->

              </div> <!-- /. col 12 -->
            </div>            
                
            
            
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