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
            <h1 class="content-title">Inbox</h1>
            <!-- nav tab -->
            <p class="text-center mail-tab">
            <a data-toggle="tab" href="#all">All</a>
             | 
            <a data-toggle="tab" href="#req">New Requests <span class="label label-warning">10</span></a>
             | 
            <a data-toggle="tab" href="#noti">Notifications</a>
            </p>
            <hr>
            <input type="search" placeholder="Search Mail" class="form-control mail-search m-t-20" />
            
            <div class="tab-content">

              <div class="tab-pane active" id="all">
                <ul class="mail-list">
                  <li>
                      <a href="inbox-read.php">
                          <span class="mail-sender">New rental request for Cozy Home @Sepang</span>
                          <span class="mail-subject">Rental request for 10 January 2017 - 17 January 2017 at Cozy Home @Sepang</span>
                          <span class="mail-message-preview">Ms Alisa is requesting to rent the Cozy Home @Sepang at Gold Coast Sepang for 10 January 2017 - 17 January 2017 with total estimated income...</span>
                      </a>
                  </li>
                  <li>
                      <a href="inbox-read.php">
                          <span class="mail-sender">Approved request for rental at English Cottage, Genting Highlands</span>
                          <span class="mail-subject">Rental request for 10 January 2017 - 17 January 2017</span>
                          <span class="mail-message-preview">Ms Alisa is requesting to rent the Cozy Home @Sepang at Gold Coast Sepang for 10 January 2017 - 17 January 2017 with total estimated income...</span>
                      </a>
                  </li>
                  <li>
                      <a href="inbox-read.php">
                          <span class="mail-sender">Cozy Home @Sepang</span>
                          <span class="mail-subject">Rental request for 10 January 2017 - 17 January 2017</span>
                          <span class="mail-message-preview">Ms Alisa is requesting to rent the Cozy Home @Sepang at Gold Coast Sepang for 10 January 2017 - 17 January 2017 with total estimated income...</span>
                      </a>
                  </li>
                  <li>
                      <a href="inbox-read.php">
                          <span class="mail-sender">Cozy Home @Sepang</span>
                          <span class="mail-subject">Rental request for 10 January 2017 - 17 January 2017</span>
                          <span class="mail-message-preview">Ms Alisa is requesting to rent the Cozy Home @Sepang at Gold Coast Sepang for 10 January 2017 - 17 January 2017 with total estimated income...</span>
                      </a>
                  </li>
                  <li>
                      <a href="inbox-read.php">
                          <span class="mail-sender">Cozy Home @Sepang</span>
                          <span class="mail-subject">Rental request for 10 January 2017 - 17 January 2017</span>
                          <span class="mail-message-preview">Ms Alisa is requesting to rent the Cozy Home @Sepang at Gold Coast Sepang for 10 January 2017 - 17 January 2017 with total estimated income...</span>
                      </a>
                  </li>
                </ul>
              </div>

              <div class="tab-pane" id="req">
                <ul class="mail-list">
                  <li>
                      <a href="inbox-read.php">
                          <span class="mail-sender">New rental request for Cozy Home @Sepang</span>
                          <span class="mail-subject">Rental request for 10 January 2017 - 17 January 2017</span>
                          <span class="mail-message-preview">Ms Alisa is requesting to rent the Cozy Home @Sepang at Gold Coast Sepang for 10 January 2017 - 17 January 2017 with total estimated income...</span>
                      </a>
                  </li>
                  <li>
                      <a href="inbox-read.php">
                          <span class="mail-sender">New rental request for Cozy Home @Sepang</span>
                          <span class="mail-subject">Rental request for 10 January 2017 - 17 January 2017</span>
                          <span class="mail-message-preview">Ms Alisa is requesting to rent the Cozy Home @Sepang at Gold Coast Sepang for 10 January 2017 - 17 January 2017 with total estimated income...</span>
                      </a>
                  </li>
                  <li>
                      <a href="inbox-read.php">
                          <span class="mail-sender">New rental request for Cozy Home @Sepang</span>
                          <span class="mail-subject">Rental request for 10 January 2017 - 17 January 2017</span>
                          <span class="mail-message-preview">Ms Alisa is requesting to rent the Cozy Home @Sepang at Gold Coast Sepang for 10 January 2017 - 17 January 2017 with total estimated income...</span>
                      </a>
                  </li>
                </ul>
              </div>

              <div class="tab-pane" id="noti">
                <ul class="mail-list">
                  <li>
                      <a href="inbox-read.php">
                          <span class="mail-sender">Approved request for rental at English Cottage, Genting Highlands</span>
                          <span class="mail-subject">Rental request for 10 January 2017 - 17 January 2017</span>
                          <span class="mail-message-preview">Ms Alisa is requesting to rent the Cozy Home @Sepang at Gold Coast Sepang for 10 January 2017 - 17 January 2017 with total estimated income...</span>
                      </a>
                  </li>
                  <li>
                      <a href="inbox-read.php">
                          <span class="mail-sender">Thank you for your stay at English Cottage, Genting Highlands</span>
                          <span class="mail-subject">Leave us a review and rate your experience there!</span>
                          <span class="mail-message-preview">Ms Alisa is requesting to rent the Cozy Home @Sepang at Gold Coast Sepang for 10 January 2017 - 17 January 2017 with total estimated income...</span>
                      </a>
                  </li>
                </ul>
              </div>

                       
            </div> <!-- /. tab content -->

            
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