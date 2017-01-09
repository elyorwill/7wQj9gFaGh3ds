<?php include 'header.php';?>
<?php include 'top-menu.php';?>
<!-- BEGIN CONTENT -->
  <!-- EMPTY BAR -->
  <section class="p-b-15 p-t-15 text-center text-white">
    <h3 class="inline text-white xs-m-b-20">&nbsp;</h3>
  </section>
<?php include 'nested-menu.php';?> 
    <!-- START USER SECTION -->
    <section class="p-b-30 p-t-30" style="background-color: #fff;">
      <div class="container">
        <div class="row">

          <div class="col-md-12">
          <h1 class="content-title">Settings</h1>
            <!-- nav tab -->
            <p class="text-center mail-tab">
	            <a data-toggle="tab" href="#personal-info">Personal Information</a>
	             | 
	            <a data-toggle="tab" href="#verification-status">Verification Status</span></a>
	             | 
	            <a data-toggle="tab" href="#connected-account">Connected Account</a>
	             | 
	            <a data-toggle="tab" href="#payout-pref">Payout Preferences</a>
            </p>
            <hr>
              <!-- Tab panes -->
        	<div class="tab-content">
          		<div class="tab-pane fade in p-t-20 active " id="personal-info">
              		<div class="row">
                  		<form id="form-project" role="form" autodanger="on" class="form-group-attached">
	                      <p>Personal Information</p>
	                        <div class="row clearfix">
	                          <div class="col-sm-2">
	                            <div class="form-group form-group-default required">
	                              <label>Title</label>
	                              <select class="full-width" data-placeholder="Select title" data-init-plugin="select2">
	                                <option value="miss">Ms.</option>
	                                <option value="mister">Mr.</option>
	                                <option value="mistress">Mrs.</option>
	                              </select>
	                            </div>
	                          </div>
	                          <div class="col-sm-5">
	                            <div class="form-group form-group-default required">
	                              <label>First Name</label>
	                              <input type="text" class="form-control" name="name-f" required>
	                            </div>
	                          </div>
	                          <div class="col-sm-5">
	                            <div class="form-group form-group-default required">
	                              <label>Last Name</label>
	                              <input type="text" class="form-control" name="name-l" required>
	                            </div>
	                          </div>
	                        </div> <!-- /. row clearfix -->
	                        <div class="row clearfix">
	                          <div class="col-sm-4">
	                            <div class="form-group form-group-default required">
	                              <label>Date of Birth</label>
	                              <select class="full-width" data-placeholder="Select Date" data-init-plugin="select2">
	                                <option value="miss">01</option>
	                                <option value="mister">02</option>
	                                <option value="mistress">03</option>
	                              </select>
	                            </div>
	                          </div>
	                          <div class="col-sm-4">
	                            <div class="form-group form-group-default required">
	                              <label>Month of Birth</label>
	                              <select class="full-width" data-placeholder="Select Date" data-init-plugin="select2">
	                                <option value="miss">January</option>
	                                <option value="mister">February</option>
	                                <option value="mistress">March</option>
	                              </select>
	                            </div>
	                          </div>
	                          <div class="col-sm-4">
	                            <div class="form-group form-group-default required">
	                              <label>Year of birth</label>
	                              <select class="full-width" data-placeholder="Select Date" data-init-plugin="select2">
	                                <option value="miss">1999</option>
	                                <option value="mister">1998</option>
	                                <option value="mistress">1997</option>
	                              </select>
	                            </div>
	                          </div>
	                        </div> <!-- /. row clearfix -->
	                        <div class="row clearfix">
	                          <div class="col-sm-6">
	                            <div class="form-group form-group-default required">
	                              <label>City</label>
	                              <input type="text" class="form-control" name="city" required>
	                            </div>
	                          </div>
	                          <div class="col-sm-6">
	                            <div class="form-group form-group-default required">
	                              <label>State</label>
	                              <select class="full-width" data-placeholder="Select Date" data-init-plugin="select2">
	                                <option value="kl">Kuala Lumpur</option>
	                                <option value="sg">Selangor</option>
	                                <option value="pr">Perak</option>
	                              </select>
	                            </div>
	                          </div>
	                        </div> <!-- /. row clearfix -->
	                        <div class="row clearfix">
	                          <div class="col-sm-12">
	                            <div class="form-group form-group-default required">
	                            	<label>Profile Picture</label>
                          			<input type="file" class="form-control" name="genre" >
	                            </div>
	                          </div>
	                        </div> <!-- /. row clearfix -->
	                    </form>
	                    <br>
	                    <div class="pull-right">
	                    	<button class="btn btn-default">Revert</button>
	                        <button class="btn btn-danger" type="submit">Save</button>
	                    </div>
	                    <div class="pull-left">
	                        <div class="row col-sm-12">
	                        	<div class="checkbox check-danger ">
	                            	<input type="checkbox" checked="checked" value="1" id="checkbox-agree">
	                            	<label>I agree by the <a href="tnc.php">Terms &amp; Condition</a></label>
	                          	</div>
	                        </div>
	                    </div>

	                </div> <!-- /. row -->
              	</div> <!-- /. tab-pane 1 -->

          		<div class="tab-pane fade in p-t-20 " id="verification-status">
              		<div class="row">
              		<form id="form-project" role="form" autodanger="on">
	                    <p>Verification Status</p>
	                    <div class="row clearfix">
	                        <div class="col-sm-7">
	                            <div class="form-group form-group-default required">
	                              <label>Contact Number</label>
                          			<input type="text" class="form-control" name="phone" >
	                            </div>
	                        </div>
	                        <div class="col-sm-5">
	              					<a href="#"><h6 class="block-title p-t-10 m-b-30 text-success"><i class="fa fa-check-circle-o m-l-10 m-r-10"></i>Verified</h6></a>
	                        </div>
	                    </div> <!-- /. row clearfix -->
	                    <div class="row clearfix">
	                        <div class="col-sm-7">
	                            <div class="form-group form-group-default required">
	                              <label>Email Address</label>
                          			<input type="text" class="form-control" name="phone" >
	                            </div>
	                        </div>
	                        <div class="col-sm-5">
	              					<a href="#"><h6 class="block-title p-t-10 m-b-30 text-danger"><i class="fa fa-circle-o m-l-10 m-r-10"></i>Resend Verification</h6></a>
	                        </div>
	                    </div> <!-- /. row clearfix -->
	                </form>

	                    <div class="row col-sm-12">
	                      	<p class="small-text semi-bold">We use this data as verification purpose and we do not share your personal mailing address and contact number with other user.</a></p>
	                    </div>


	                    <p class="p-t-50">Connected Account</p>

	                    <div class="col-md-8">
	                    	<h6 class="block-title text-danger">Facebook</h6>
	                    	<p class="small-text semi-bold">You are already connected as <span class="bold">username</span> with us through Facebook!</a></p>
	                    	
	                    </div>
	                    <div class="col-md-4">
	                    	<button class="m-t-10 btn btn-complete btn-lg semi-bold disabled"><i class="fa fa-facebook m-t-5 m-r-5"></i>Connect with Facebook</button>
	                    </div>
	                    <!-- for google use this 
	                    <div class="col-md-8">
	                    	<h6 class="block-title text-danger">Google</h6>
	                    	<p class="small-text semi-bold">Connect your BOOKU account to your Google account for simplicity and ease.</a></p>
	                    	
	                    </div>
	                    <div class="col-md-4">
	                    	<button class="m-t-10 btn btn-danger btn-lg"><i class="fa fa-google-plus m-t-5 m-r-5"></i>Connect with Google</button>
	                    </div>
	                    -->
	                    <div class="pull-right m-t-40">
	                    	<button class="btn btn-default">Revert</button>
	                        <button class="btn btn-danger" type="submit">Save</button>
	                    </div>
              		</div>
              	</div>

          		<div class="tab-pane fade in p-t-20" id="connected-account">
              		<div class="row">
		                <div class="row m-t-20">
		                    <div class="col-md-8">
		                    	<h6 class="block-title text-danger">Disconnect All Account</h6>
		                    	<p class="small-text semi-bold">You can disconnect all account to delete your account</a></p>
		                    	
		                    </div>
		                    <div class="col-md-4">
		                    	<button class="pull-right m-t-10 btn btn-danger btn-lg"></i>Delete Account</button>
		                    </div>
	                    </div>
              		</div> <!-- /. row -->
              	</div> <!-- /. pane 3 -->

          		<div class="tab-pane fade in p-t-20" id="payout-pref">
              		<div class="row">
              			
              			<div class="col-md-3">
                  			<ul class="nav nav-tabs nav-tabs-simple nav-tabs-left bg-white" id="tab-3">
					            <li class="active">
					              <a data-toggle="tab" href="#bank">Bank Transfer</a>
					            </li>
					            <li>
					              <a data-toggle="tab" href="#paypal">Paypal</a>
					            </li>
					        </ul>
              			</div>

              			<div class="col-md-9">
                  			<div class="tab-content bg-white ">
					            <div class="tab-pane active" id="bank">
					              <h6 class="block-title m-b-0">select preferred bank</h6>
						            <div>
						              	<form action="" class="p-t-20">
										  <input type="radio" name="bank" value="maybank"><img class="bank" src="asset/image/bank/mb.jpg" alt="" width="100%">
										  <input type="radio" name="bank" value="cimb"><img class="bank" src="asset/image/bank/cimb.jpg" alt="" width="100%">
										  <input type="radio" name="bank" value="hlb"><img class="bank" src="asset/image/bank/hlb.jpg" alt="" width="100%">
										  <input type="radio" name="bank" value="bi"><img class="bank" src="asset/image/bank/bi.jpg" alt="" width="100%">
										  <br>
										  <input type="radio" name="bank" value="rhb"><img class="bank" src="asset/image/bank/rhb.jpg" alt="" width="100%">
										  <input type="radio" name="bank" value="pb"><img class="bank" src="asset/image/bank/pb.jpg" alt="" width="100%">
										  <input type="radio" name="bank" value="hsbc"><img class="bank" src="asset/image/bank/hsbc.jpg" alt="" width="100%">
										</form>
									</div>
					              <h6 class="block-title m-t-50 m-b-20">account detail</h6>
						            <div>
						              	<div class="form-group form-group-default required">
			                            	<label>account holder name</label>
			                            	<input type="text" class="form-control" name="city" required>
			                            </div>
						              	<div class="form-group form-group-default required">
			                            	<label>account number</label>
			                            	<input type="text" class="form-control" name="city" required>
			                            </div>
									</div>
					            <div class="pull-right m-t-40">
					                <button class="btn btn-default">Clear</button>
					                <button class="btn btn-danger" type="submit">Save</button>
					            </div>
					            </div>
					            <div class="tab-pane" id="paypal">
					              <h6 class="block-title m-b-20">account detail</h6>
						            <div>
						              	<div class="form-group form-group-default required">
			                            	<label>email</label>
			                            	<input type="text" class="form-control" name="city" required>
			                            </div>
						              	<div class="form-group form-group-default required">
			                            	<label>account number</label>
			                            	<input type="text" class="form-control" name="city" required>
			                            </div>
									</div>
					            <div class="pull-right m-t-40">
					                <button class="btn btn-default">Clear</button>
					                <button class="btn btn-danger" type="submit">Save</button>
					            </div>
					        </div>
					    </div>
              		</div> <!-- /. col 6 -->
              	</div>
            </div>
         </div> <!-- /. col 9 -->
      </div>
    </section>

    <!-- END USER SECTION -->

<!-- end page content -->

<?php include 'footer.php';?>
<!-- BEGIN YOUR CUSTOM JS -->

<!-- CUSTOM SCRIPT HERE -->

<!-- ./ END CUSTOM SCRIPT -->
<?php include 'end-html.php';?>