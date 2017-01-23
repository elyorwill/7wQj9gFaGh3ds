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
            <h1 class="content-title text-danger">Oops! Something goes wrong!</h1>
            
            <div class="text-center">
              <p>Sorry but your payment can't be processed right now.<br>
                Kindly contact your credit card provider or local bank for help.
              </p>
              <div class="row">
                <img src="asset/image/vacay.jpg" style="width: 600px; padding: 20px;">
              </div> <!-- /. row -->
              <div class="row">
                <button class="m-t-35 btn btn-danger btn-lg" onClick="document.location.href='booking-detail-pending.php'" type="submit">Return to booking detail</button>
              </div>

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