<?php include 'header.php';?>
<?php include 'top-menu.php';?>

    <!-- BEGIN JUMBOTRON -->
  <section class="p-t-100" style="background-image: url('asset/image/header-banner-1.jpg'); height: 100% !important; margin: 0px !important;">
    <div class="container m-b-0 m-t-30 p-t-80">
      <div class="row">
        <div class="col-md-8">
          &nbsp;
        </div>
        <div class="col-md-4 p-t-80 p-l-40" style="background-color: #fff; margin-top: -80px; padding-bottom: 250px;">
          <h2>Hello!</h2>
          <div class="p-r-40 sm-p-r-0">
            <p>Please log in to continue</p>
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
                  <button class="btn btn-danger font-montserrat all-caps fs-12 pull-right xs-pull-left">Log in</button>
                </div>
                <div class="clearfix"></div>
              </form>
            </div>
          </div>
        </div>
        
      </div>
    </div>
    </section>
    <!-- END JUMBOTRON -->

<!-- end page content -->

<?php include 'footer.php';?>
<!-- BEGIN YOUR CUSTOM JS -->

<!-- CUSTOM SCRIPT HERE -->

<!-- ./ END CUSTOM SCRIPT -->
<?php include 'end-html.php';?>