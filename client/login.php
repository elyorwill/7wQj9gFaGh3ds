<?php include 'header.php';?>
<!-- BEGIN MENU -->
<?php include 'top-menu.php';?>
<!-- END HEADER -->

<!-- BEGIN JUMBOTRON -->
<section class="jumbotron full-vh" data-pages="parallax">
  <div class="inner full-height">
    <!-- BEGIN SLIDER -->
    <div class="swiper-container" id="hero">
      <div class="swiper-wrapper">

        <!-- BEGIN SLIDE -->
        <div class="swiper-slide fit">
          <!-- BEGIN IMAGE PARRALAX -->
          <div class="slider-wrapper">
            <div class="background-wrapper" data-swiper-parallax="30%">
              <!-- YOUR BACKGROUND IMAGE HERE, YOU CAN ALSO USE IMG with the same classes -->
              <img id="slider" class="background" src="asset/image/header-banner-1.jpg">
            </div>
          </div>
          <!-- END IMAGE PARRALAX -->
          <!-- BEGIN CONTENT -->
          <div class="content-layer">
            <div class="inner full-height">
              <div class="container-xs-height full-height">
                <div class="col-xs-height col-middle">
                  <div class="col-md-4">
                    &nbsp;
                  </div>
                  
                  <div class="col-md-4 text-left" style="background-color: #fff; border-radius: 10px;">
                    <div class="p-t-50 p-l-40">
                      <h2>Hello!</h2>
                      <div class="p-r-40 sm-p-r-0">
                        <p>Please log in to continue</p>
                        <div class="panel" id="contact-panel">
                          <form role="form" autocomplete="off" class="m-t-15" id="login-form" action="dashboard.php" method="post">
                            <div class="form-group form-group-default">
                              <label>Username</label>
                              <input type="text" name="username" class="form-control" required>
                            </div>
                            <div class="form-group form-group-default">
                              <label>Password</label>
                              <input type="password" name="password" class="form-control" required>
                            </div>
                            <div class="m-t-20 sm-p-t-10 clearfix">
                              <p class="small pull-right m-t-10"><a class="small" href="#">Forgot password?</a></p>
                              <button class="btn btn-danger font-montserrat all-caps fs-12 pull-left">Log in</button>
                            </div>
                            <div class="clearfix"></div>
                          </form>
                          <hr class="m-t-40">
                          <p class="small hint-text text-center">Or <a href="register.php">sign up</a> now to start renting your desired space!</p>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-4">
                    &nbsp;
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- END CONTENT -->
        </div>
        <!-- END SLIDE -->
      </div>
    </div>
    <!-- END SLIDER -->
  </div>
</section>
<!-- END JUMBOTRON -->

<?php include 'footer.php';?>

<!-- CUSTOM SCRIPT HERE -->

<script>
  var slideIndex = 1;
  showDivs(slideIndex);

  function plusDivs(n) {
      showDivs(slideIndex += n);
  }

  function showDivs(n) {
      var i;
      var x = document.getElementsByClassName("feature-slider");
      if (n > x.length) {slideIndex = 1} 
      if (n < 1) {slideIndex = x.length} ;
      for (i = 0; i < x.length; i++) {
          x[i].style.display = "none"; 
      }
      x[slideIndex-1].style.display = "block"; 
  }
</script>

<script>
      $( function() {
        $( "#from1" ).datepicker();
        $( "#to1" ).datepicker();
        $( "#from2" ).datepicker();
        $( "#to2" ).datepicker();
        $( "#from3" ).datepicker();
        $( "#to3" ).datepicker();
      } );
    </script>
<!-- ./ END CUSTOM SCRIPT -->
<?php include 'end-html.php';?>