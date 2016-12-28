<?php


include_once '../inc/configAll.php';


$_SESSION['rdrlocation'] = $currenturl;
 ?>

<?php include 'header.php';?>
<?php include 'top-menu.php';?>

<!-- start page content -->
<!-- BEGIN JUMBOTRON -->
<section style="background-image: url('asset/image/header-banner-1.jpg');">
    <div class="container p-t-90 m-b-0">
      <div class="row">
          <div class="col-md-7 m-t-20" style="background-color: #fff; padding: 30px; padding-right: 0px;">
            <h2>Don't have an account yet?</h2>

            <div class="p-r-40 sm-p-r-0">
              <?php echo $notficationmsg; ?>
              <p>Sign up with us for free and start renting or lending your space right away!</p>
              <div class="panel" id="contact-panel">
                <form role="form" autocomplete="off" class="m-t-15" id="register-form" action="../vals/userregister.php" method="post">
                  <div class="row">
                    <div class="form-group form-group-default required">
                      <label>Full name</label>
                      <input type="text" name="fullname" class="form-control" required>
                    </div>
                  </div>
                  <div class="form-group form-group-default required">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" required>
                  </div>
                  <div class="form-group form-group-default required">
                    <label>Phone</label>
                    <input type="text" name="password" placeholder="ex. 0123456789" class="form-control" required>
                  </div>
                  <div class="sm-p-t-10 clearfix checkbox check-danger">
            		  <input type="checkbox" value="register" id="register">
              		<label class="m-t-10" for="register">I hereby certify that the information above is true and accurate. </label><br>
                    <button type="submit" name="submituserform" class="m-t-20 btn btn-danger font-montserrat all-caps fs-12 pull-right xs-pull-left">Register</button>
                  </div>
                  <div class="clearfix"></div>
                </form>
                <div class="m-t-20">
                    <p>Or connect with social media!</p>
                  </div>
                  <div class="m-t-20">
                    <h4 class="text-white social-icon">
			            <a href="#"><i class="fa fa-facebook m-r-10 facebook" style="padding-left: 14px;"></i></a>
			            <i class="fa fa-twitter m-r-10 twitter"></i>
			            <i class="fa fa-google-plus m-r-10 youtube" style="padding-left: 14px;"></i>
			         </h4>
                  </div>
              </div>
            </div>
          </div>
          <div class="col-md-5">
          	&nbsp;
          </div>
        </div>
          </div>
          <!-- END CONTENT -->
    </section>
    <!-- END JUMBOTRON -->

<!-- end page content -->

<?php include 'footer.php';?>
<!-- BEGIN YOUR CUSTOM JS -->

<!-- CUSTOM SCRIPT HERE -->

<!-- ./ END CUSTOM SCRIPT -->
<?php include 'end-html.php';?>
