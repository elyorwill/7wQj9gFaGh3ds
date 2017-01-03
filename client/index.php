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
                <div class="col-xs-height col-middle text-left">

                  <div class="container ">
                    <div class="col-md-6 no-padding col-xs-10 col-xs-offset-1">
                      <h1 class="m-b-0 bold text-danger sm-text-center" style="text-transform: uppercase;" data-swiper-parallax="-15%"> Rent a perfect place</h1>
                      <h3 class="m-t-0 sm-text-center semi-bold">Search and book place for your every need</h3>
                    </div>
                  </div>
                  <!-- search container -->
                  <div class="container m-t-20" style="border-color: #999;"> 
                    <div class="col-md-10 no-padding col-xs-10 col-xs-offset-1">
                      <!-- nav tab -->
                      <div>
                        <ul class="nav nav-simple nav-tabs nav-tabs-fillup">
                          <li class="active">
                            <a class="bold" data-toggle="tab" href="#tabliving" onclick="document.getElementById('slider').src='asset/image/header-banner-1.jpg'">Living Space</a>
                          </li>
                          <li>
                            <a class="bold" data-toggle="tab" href="#taboffice" onclick="document.getElementById('slider').src='asset/image/header-banner-2.jpg'">Working Space</a>
                          </li>
                          <li>
                            <a class="bold" data-toggle="tab" href="#tableisure" onclick="document.getElementById('slider').src='asset/image/header-banner-3.jpg'">Leisure Space</a>
                          </li>
                        </ul>
                      </div>
                      <!-- tab content -->      
                      <div class="tab-content">

                        <div class="tab-pane active" id="tabliving">
                          <form class="" role="form form-attached">
                            <div class="row">
                              <div class="col-sm-4">
                                <div class="form-group form-group-default">
                                  <label class="pull-left p-b-10">Location</label>
                                  <input type="text" class="form-control">
                                </div>
                              </div>
                              <div class="col-sm-6" style="margin-left: -15px;">
                                <div class="form-group form-group-default">
                                  <label class="pull-left p-b-10" >Pick A Date</label>
                                  <input type="text" class="form-control" name="dateliving" value="01/01/2015 1:30 PM - 01/01/2015 2:00 PM" />
                                </div>
                              </div>
                              <div class="col-sm-2" style="margin-left: -15px;">
                                <div class="form-group form-group-default" style="padding-top: 10px; padding-bottom: 11px;">
                                  <a href="search-result.php"><button type="button" class="btn btn-block btn-danger btn-lg text-white text-block bold" style="text-transform: uppercase;">
                                    Search
                                  </button></a>
                                </div>
                              </div>
                            </div> <!-- /. row -->
                          </form>
                        </div>

                        <div class="tab-pane" id="taboffice">
                          <form class="" role="form form-attached">
                            <div class="row">
                              <div class="col-sm-4">
                                <div class="form-group form-group-default">
                                  <label class="pull-left p-b-10">Location</label>
                                  <input type="text" class="form-control">
                                </div>
                              </div>
                              <div class="col-sm-6" style="margin-left: -15px;">
                                <div class="form-group form-group-default">
                                  <label class="pull-left p-b-10" >Pick A Date</label>
                                  <input type="text" class="form-control" name="dateworking" value="01/01/2015 1:30 PM - 01/01/2015 2:00 PM" />
                                </div>
                              </div>
                              <div class="col-sm-2" style="margin-left: -15px;">
                                <div class="form-group form-group-default" style="padding-top: 10px; padding-bottom: 11px;">
                                  <button type="button" class="btn btn-block btn-danger btn-lg text-white text-block bold" style="text-transform: uppercase;">
                                    Search
                                  </button>
                                </div>
                              </div>
                            </div> <!-- /. row -->
                          </form>
                        </div>

                        <div class="tab-pane" id="tableisure">
                          <form class="" role="form form-attached">
                            <div class="row">
                              <div class="col-sm-4">
                                <div class="form-group form-group-default">
                                  <label class="pull-left p-b-10">Location</label>
                                  <input type="text" class="form-control">
                                </div>
                              </div>
                              <div class="col-sm-6" style="margin-left: -15px;">
                                <div class="form-group form-group-default">
                                  <label class="pull-left p-b-10" >Pick A Date</label>
                                  <input type="text" class="form-control" name="dateleisure" value="01/01/2015 1:30 PM - 01/01/2015 2:00 PM" />
                                </div>
                              </div>
                              <div class="col-sm-2" style="margin-left: -15px;">
                                <div class="form-group form-group-default" style="padding-top: 10px; padding-bottom: 11px;">
                                  <button type="button" class="btn btn-block btn-danger btn-lg text-white text-block bold" style="text-transform: uppercase;">
                                    Search
                                  </button>
                                </div>
                              </div>
                            </div>
                          </form>
                        </div>

                      </div> <!-- /. tab content -->

                    </div>
                  </div> <!-- /. search container -->

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


<!-- BEGIN BY TYPE -->
<section>
  <div class="container side-padding m-t-50">
    <h2 class="text-center semi-bold">Search and book place for your every need</h2>
    <div class="row">
      <div class="col-md-4 type-section" id="type-overlay">
        <div id="overlays">
        <h2>Living Space</h2>
        <a href="#" class="btn btn-danger btn-lg">View Space</a>
        </div>
        <img src="asset/image/square-500.jpg">
      </div>
      <div class="col-md-4 type-section" id="type-overlay">
        <div id="overlays">
        <h2>Working Space</h2>
        <a href="#" class="btn btn-danger btn-lg">View Space</a>
        </div>
        <a href="#"><img src="asset/image/square-500.jpg"></a>
      </div>
      <div class="col-md-4 type-section" id="type-overlay">
        <div id="overlays">
        <h2>Leisure Space</h2>
        <a href="#" class="btn btn-danger btn-lg">View Space</a>
        </div>
        <a href="#"><img src="asset/image/square-500.jpg"></a>
      </div>
    </div>
  </div>
</section>  
<!-- END BY TYPE -->  

<!-- BEGIN FEATURED -->
<section>
  <div class="container side-padding m-t-50">
    <!--Slider Navigation -->
      <div class="pull-right nextback">
        <ul class="pagination m-b-0">
          <li><a onclick="plusDivs(-1)">❮</a></li>
          <li><a onclick="plusDivs(+1)">❯</a></li>
        </ul>
      </div>
    <h2 class="text-center semi-bold">Featured / Most Popular</h2>
    <div class="row">
      <div class="feature-slider">
        <div class="col-md-4 type-section">
          <img src="asset/image/square-500.jpg">
          <div class="bottom-detail">
            <div class="row m-b-0">
              <h3 class="pull-right text-warning">
                <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i>
              </h3>
              <h4 class="bold">Cozy Studio @ Kinrara</h4>
            </div>
            <div class="row m-t-0">
              <p class="pull-right" style="margin-top: -5px">53 Reviews</p>
              <p style="margin-top: -5px">8 Kinrara, Puchong</p>
            </div>
            <div class="row p-t-10">
              <a class="pull-right btn btn-danger btn-lg text-white text-block bold m-t-5" href="space-detail.php" data-text="view">View space</a>
              <h4 class="bold">RM 216 /day</h4>
            </div>
          </div>
        </div>
        <div class="col-md-4 type-section">
          <img src="asset/image/square-500.jpg">
          <div class="bottom-detail">
            <div class="row m-b-0">
              <h3 class="pull-right text-warning">
                <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i>
              </h3>
              <h4 class="bold">Cozy Studio @ Kinrara</h4>
            </div>
            <div class="row m-t-0">
              <p class="pull-right" style="margin-top: -5px">53 Reviews</p>
              <p style="margin-top: -5px">8 Kinrara, Puchong</p>
            </div>
            <div class="row p-t-10">
              <a class="pull-right btn btn-danger btn-lg text-white text-block bold m-t-5" href="space-detail.php" data-text="view">View space</a>
              <h4 class="bold">RM 216 /day</h4>
            </div>
          </div>
        </div>
        <div class="col-md-4 type-section">
          <img src="asset/image/square-500.jpg">
          <div class="bottom-detail">
            <div class="row m-b-0">
              <h3 class="pull-right text-warning">
                <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i>
              </h3>
              <h4 class="bold">Cozy Studio @ Kinrara</h4>
            </div>
            <div class="row m-t-0">
              <p class="pull-right" style="margin-top: -5px">53 Reviews</p>
              <p style="margin-top: -5px">8 Kinrara, Puchong</p>
            </div>
            <div class="row p-t-10">
              <a class="pull-right btn btn-danger btn-lg text-white text-block bold m-t-5" href="space-detail.php" data-text="view">View space</a>
              <h4 class="bold">RM 216 /day</h4>
            </div>
          </div>
        </div>
      </div>
      <div class="feature-slider">
        <div class="col-md-4 type-section">
          <img src="asset/image/square-500.jpg">
          <div class="bottom-detail">
            <div class="row m-b-0">
              <h3 class="pull-right text-warning">
                <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i>
              </h3>
              <h4 class="bold">Meeting Room</h4>
            </div>
            <div class="row m-t-0">
              <p class="pull-right" style="margin-top: -5px">53 Reviews</p>
              <p style="margin-top: -5px">Bukit Jalil Pavilion, Bukit Jalil</p>
            </div>
            <div class="row p-t-10">
              <a class="pull-right btn btn-danger btn-lg text-white text-block bold m-t-5" href="space-detail.php" data-text="view">View space</a>
              <h4 class="bold">RM 216 /hour</h4>
            </div>
          </div>
        </div>
        <div class="col-md-4 type-section">
          <img src="asset/image/square-500.jpg">
          <div class="bottom-detail">
            <div class="row m-b-0">
              <h3 class="pull-right text-warning">
                <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i>
              </h3>
              <h4 class="bold">Meeting Room</h4>
            </div>
            <div class="row m-t-0">
              <p class="pull-right" style="margin-top: -5px">53 Reviews</p>
              <p style="margin-top: -5px">Bukit Jalil Pavilion, Bukit Jalil</p>
            </div>
            <div class="row p-t-10">
              <a class="pull-right btn btn-danger btn-lg text-white text-block bold m-t-5" href="space-detail.php" data-text="view">View space</a>
              <h4 class="bold">RM 216 /hour</h4>
            </div>
          </div>
        </div>
        <div class="col-md-4 type-section">
          <img src="asset/image/square-500.jpg">
          <div class="bottom-detail">
            <div class="row m-b-0">
              <h3 class="pull-right text-warning">
                <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i>
              </h3>
              <h4 class="bold">Meeting Room</h4>
            </div>
            <div class="row m-t-0">
              <p class="pull-right" style="margin-top: -5px">53 Reviews</p>
              <p style="margin-top: -5px">Bukit Jalil Pavilion, Bukit Jalil</p>
            </div>
            <div class="row p-t-10">
              <a class="pull-right btn btn-danger btn-lg text-white text-block bold m-t-5" href="space-detail.php" data-text="view">View space</a>
              <h4 class="bold">RM 216 /hour</h4>
            </div>
          </div>
        </div>
      </div>
      <div class="feature-slider">
        <div class="col-md-4 type-section">
          <img src="asset/image/square-500.jpg">
          <div class="bottom-detail">
            <div class="row m-b-0">
              <h3 class="pull-right text-warning">
                <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i>
              </h3>
              <h4 class="bold">End Unit Shoplot</h4>
            </div>
            <div class="row m-t-0">
              <p class="pull-right" style="margin-top: -5px">53 Reviews</p>
              <p style="margin-top: -5px">The Earth, Bukit Jalil</p>
            </div>
            <div class="row p-t-10">
              <a class="pull-right btn btn-danger btn-lg text-white text-block bold m-t-5" href="space-detail.php" data-text="view">View space</a>
              <h4 class="bold">RM 2,160 /month</h4>
            </div>
          </div>
        </div>
        <div class="col-md-4 type-section">
          <img src="asset/image/square-500.jpg">
          <div class="bottom-detail">
            <div class="row m-b-0">
              <h3 class="pull-right text-warning">
                <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i>
              </h3>
              <h4 class="bold">End Unit Shoplot</h4>
            </div>
            <div class="row m-t-0">
              <p class="pull-right" style="margin-top: -5px">53 Reviews</p>
              <p style="margin-top: -5px">The Earth, Bukit Jalil</p>
            </div>
            <div class="row p-t-10">
              <a class="pull-right btn btn-danger btn-lg text-white text-block bold m-t-5" href="space-detail.php" data-text="view">View space</a>
              <h4 class="bold">RM 2,160 /month</h4>
            </div>
          </div>
        </div>
        <div class="col-md-4 type-section">
          <img src="asset/image/square-500.jpg">
          <div class="bottom-detail">
            <div class="row m-b-0">
              <h3 class="pull-right text-warning">
                <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i>
              </h3>
              <h4 class="bold">End Unit Shoplot</h4>
            </div>
            <div class="row m-t-0">
              <p class="pull-right" style="margin-top: -5px">53 Reviews</p>
              <p style="margin-top: -5px">The Earth, Bukit Jalil</p>
            </div>
            <div class="row p-t-10">
              <a class="pull-right btn btn-danger btn-lg text-white text-block bold m-t-5" href="space-detail.php" data-text="view">View space</a>
              <h4 class="bold">RM 2,160 /month</h4>
            </div>
          </div>
        </div>
      </div>
      
      

      <!-- Add Navigation 
      <div class="swiper-navigation swiper-dark-solid swiper-button-prev" onclick="plusDivs(-1)"></div>
      <div class="swiper-navigation swiper-dark-solid swiper-button-next" onclick="plusDivs(+1)"></div>
      -->
    </div>
  </div>
</section>  
<!-- END FEATURED -->    

<!-- BEGIN FEATURED -->
<section>
  <div class="container side-padding m-t-50">
    <h2 class="text-center semi-bold p-b-10">Trending Destination</h2>
    <div class="row trending-tile">
      <div class="col-md-6 no-padding no-margin">
        <a href="#"><img src="asset/image/rect-500-250.jpg"></a>
      </div>
      <div class="col-md-3 no-padding no-margin">
        <a href="#"><img src="asset/image/square-500.jpg"></a>
      </div>
      <div class="col-md-3 no-padding no-margin">
        <a href="#"><img src="asset/image/square-500.jpg"></a>
      </div>
    </div>
    <div class="row trending-tile">
      <div class="col-md-3 no-padding no-margin">
        <a href="#"><img src="asset/image/square-500.jpg"></a>
      </div>
      <div class="col-md-3 no-padding no-margin">
        <a href="#"><img src="asset/image/square-500.jpg"></a>
      </div>
      <div class="col-md-6 no-padding no-margin">
        <a href="#"><img src="asset/image/rect-500-250.jpg"></a>
      </div>
    </div>
  </div>
</section>  
<!-- END FEATURED --> 

<!-- BEGIN FOOD -->
<section>
  <div class="container side-padding m-t-50">
    <h2 class="text-center semi-bold">Best place to eat</h2>
    <div class="row">
      <div class="col-md-4 type-section">
        <img src="asset/image/square-500.jpg">
        <div class="bottom-detail">
          <div class="row p-t-10">
            <a class="pull-right btn btn-danger btn-lg text-white text-block bold m-t-5" href="#" data-text="view">Read more</a>
            <h4 class="bold">Georgetown</h4>
          </div>
        </div>
      </div>
      <div class="col-md-4 type-section">
        <img src="asset/image/square-500.jpg">
        <div class="bottom-detail">
          <div class="row p-t-10">
            <a class="pull-right btn btn-danger btn-lg text-white text-block bold m-t-5" href="#" data-text="view">Read more</a>
            <h4 class="bold">Georgetown</h4>
          </div>
        </div>
      </div>
      <div class="col-md-4 type-section">
        <img src="asset/image/square-500.jpg">
        <div class="bottom-detail">
          <div class="row p-t-10">
            <a class="pull-right btn btn-danger btn-lg text-white text-block bold m-t-5" href="#" data-text="view">Read more</a>
            <h4 class="bold">Georgetown</h4>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>  
<!-- END FOOD -->

<!-- BEGIN FOOD -->
<section class="background-grey">
  <div class="container side-padding">
    <h2 class="text-center semi-bold m-t-50 p-b-30">How it works</h2>
    <div class="row text-center">
      <div class="col-md-4 type-section icon-text">
        <img src="asset/image/square-500.jpg">
        <h4 class="bold">Browse unique space</h4>
        <p class="semi-bold">Search by location, type, number of guest or style - What fit your need?</p>
      </div>
      <div class="col-md-4 type-section icon-text">
        <img src="asset/image/square-500.jpg">
        <h4 class="bold">Contact hosts directly</h4>
        <p class="semi-bold">Ask your hosts questions to find out whether the space is right for you</p>
      </div>
      <div class="col-md-4 type-section icon-text">
        <img src="asset/image/square-500.jpg">
        <h4 class="bold">Confirm &amp; enjoy</h4>
        <p class="semi-bold">Once you've found the right place to stay, enjoy leisure or do work, make payment to confirm</p>
      </div>
    </div>
  </div>
</section>  
<!-- END FOOD -->  

<!-- BEGIN LOGO -->
<section>
  <div class="container side-padding">
    <h2 class="text-center semi-bold m-t-50 p-b-30">Featured on</h2>
    <div class="row text-center">
      <div class="col-md-3 type-section icon-text">
        <img class="pull-right" src="asset/image/rect-500-250.jpg">
      </div>
      <div class="col-md-2 type-section icon-text">
        <img src="asset/image/rect-500-250.jpg">
      </div>
      <div class="col-md-2 type-section icon-text">
        <img src="asset/image/rect-500-250.jpg">
      </div>
      <div class="col-md-2 type-section icon-text">
        <img src="asset/image/rect-500-250.jpg">
      </div>
      <div class="col-md-3 type-section icon-text">
        <img class="pull-left" src="asset/image/rect-500-250.jpg">
      </div>
    </div>
  </div>
</section>  
<!-- END LOGO -->  
<div class="p-t-50">&nbsp;</div>
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
    
