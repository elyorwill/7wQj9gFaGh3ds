<?php include 'header.php';?>
<?php include 'top-menu.php';?>

<!-- start page content -->
<!-- BEGIN JUMBOTRON -->
    <div class="container m-t-100 p-t-60">
      <div class="row">
          <div class="col-md-6">
            <h2>Don't have an account yet?</h2>
            <div class="p-r-40 sm-p-r-0">
              <p>Sign up with us for free and start renting or lending your book right away!</p>
              <div class="panel" id="contact-panel">
                <form role="form" autocomplete="off" class="m-t-15" id="contact-form" action="_lib/mail.php" method="post">
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group form-group-default required">
                        <label>First name</label>
                        <input type="text" name="name" class="form-control" required>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group form-group-default">
                        <label>Last name</label>
                        <input type="text" name="last-name" class="form-control" required>
                      </div>
                    </div>
                  </div>
                  <div class="form-group form-group-default">
                    <label>Email</label>
                    <input type="email" name="email" placeholder="This can be changed later" class="form-control" required>
                  </div>
                  <div class="form-group form-group-default">
                    <label>Password</label>
                    <input type="password" name="password" placeholder="This can be changed later" class="form-control" required>
                  </div>
                  <div class="sm-p-t-10 clearfix">
                    <p class="pull-left small hint-text m-t-5 font-arial">I hereby certify that the information above is true and accurate. </p>
                    <button class="btn btn-complete font-montserrat all-caps fs-12 pull-right xs-pull-left">Register</button>
                  </div>
                  <div class="clearfix"></div>
                </form>
                <div class="m-t-20">
                    <p>Or connect with social media!</p>
                  </div>
                  <div class="m-t-20">
                    <button class="btn btn-default btn-border font-montserrat all-caps fs-12"><img class="lazy" src="assets/images/google-plus.png" width="33" height="33" alt=""></button>
                    <button class="btn btn-default btn-border font-montserrat all-caps fs-12"><img class="lazy" src="assets/images/facebook.png" width="33" height="33" alt=""></button>
                    <button class="btn btn-default btn-border font-montserrat all-caps fs-12"><img class="lazy" src="assets/images/twitter.png" width="33" height="33" alt=""></button>
                  </div>
              </div>
            </div>
          </div>
          
          <div class="col-md-6">
            <h2>Hello, Welcome back!</h2>
            <div class="p-r-40 sm-p-r-0">
              <p>Finished your current reading? Why not check out the latest addition in our shelves!</p>
              <div class="panel" id="contact-panel">
                <form role="form" autocomplete="off" class="m-t-15" id="contact-form" action="_lib/mail.php" method="post">
                  <div class="form-group form-group-default">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control" required>
                  </div>
                  <div class="form-group form-group-default">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" required>
                  </div>
                  <div class="sm-p-t-10 clearfix">
                    <button class="btn btn-complete font-montserrat all-caps fs-12 pull-right xs-pull-left">Log in</button>
                  </div>
                  <div class="clearfix"></div>
                </form>
              </div>
            </div>
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