<?php

include_once '../inc/configAll.php';

$itemsql = "select i.id, i.title, p.pricecurrency as currency, p.priceoriginal as price, p.pricemode,
            i.category, i.hometype, i.roomtype, i.accommodate, i.bedrooms, i.bathrooms, u.fullname, i.postdate,
            u.id as uid, ph.photo as itemcover, count(ph.id) as totalphotos, MIN(ph.sortnum) as minsortnum
            from item i
            left join user u on i.hostid = u.id
            left join itemprice p on i.id = p.listid
            left join itemlocation l on i.id = l.listid
            left join itemphotos ph on i.id = ph.itemid and ph.sortnum = (select sortnum from itemphotos where itemid = i.id order by sortnum limit 1)
            group by i.id
            order by i.postdate desc";

$itemquery = mysqli_query($connecDB,$itemsql);

$listcollect = '<ul id="fh5co-portfolio-list">';

while($itemrow = mysqli_fetch_array($itemquery)){

$listcollect .= '<div class="col-md-4 type-section">
                    <img src="../uploads/items/'.$itemrow['id'].'/grid/'.$itemrow['itemcover'].'">
                    <div class="bottom-detail">
                      <div class="row m-b-0">
                        <h3 class="pull-right text-warning">
                          <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i>
                        </h3>
                        <h4 class="bold">'.$itemrow['title'].'</h4>
                      </div>
                      <div class="row m-t-0">
                        <p class="pull-right" style="margin-top: -5px">53 Reviews</p>
                        <p style="margin-top: -5px">8 Kinrara, Puchong</p>
                      </div>
                      <div class="row p-t-10">
                        <a class="pull-right btn btn-danger btn-lg text-white text-block bold m-t-5" href="#" data-text="view">View space</a>
                        <h4 class="bold">'.$itemrow['currency'].''.$itemrow['price'].' '.$itemrow['pricemode'].'</h4>
                      </div>
                    </div>
                  </div>';
}
$listcollect .= '</ul>';


 ?>
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
              <img class="background" src="asset/image/header-banner-1.jpg">
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
                            <a class="bold" data-toggle="tab" href="#tabliving">Living Space</a>
                          </li>
                          <li>
                            <a class="bold" data-toggle="tab" href="#taboffice">Office Space</a>
                          </li>
                          <li>
                            <a class="bold" data-toggle="tab" href="#tableisure">Leisure Space</a>
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
                              <div class="col-sm-3" style="margin-left: -15px;">
                                <div id="living-in" class="form-group form-group-default input-group date" style="padding-bottom: 4px;">
                                  <label class="pull-left p-b-10">Check In</label>
                                    <input type="text" class="form-control">
                                </div>
                              </div>
                              <div class="col-sm-3" style="margin-left: -15px;">
                                <div class="form-group form-group-default">
                                  <label class="pull-left p-b-10" >Check Out</label>
                                  <input type="calendar" class="form-control">
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

                        <div class="tab-pane" id="taboffice">
                          <form class="" role="form form-attached">
                            <div class="row">
                              <div class="col-sm-4">
                                <div class="form-group form-group-default">
                                  <label class="pull-left p-b-10">Location</label>
                                  <input type="text" class="form-control">
                                </div>
                              </div>
                              <div class="col-sm-3" style="margin-left: -15px;">
                                <div class="form-group form-group-default">
                                  <label class="pull-left p-b-10">Type<i class="fa fa-play m-l-10"></i></label>
                                  <select class="form-control cs-select cs-skin-slide" data-init-plugin="cs-select">
                                    <option value="Web-safe">Meeting Space</option>
                                    <option value="Helvetica">Office Space</option>
                                    <option value="SegeoUI">Photo Studio</option>
                                  </select>
                                </div>
                              </div>
                              <div class="col-sm-3" style="margin-left: -15px;">
                                <div class="form-group form-group-default">
                                  <label class="pull-left p-b-10" >Date</label>
                                  <input type="calendar" class="form-control">
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
                              <div class="col-sm-3" style="margin-left: -15px;">
                                <div class="form-group form-group-default">
                                  <label class="pull-left p-b-10">Type</label>
                                  <select class="form-control cs-select cs-skin-slide" data-init-plugin="cs-select">
                                    <option value="Web-safe">Cafe</option>
                                    <option value="Helvetica">Gym</option>
                                    <option value="SegeoUI">Dance Studio</option>
                                  </select>
                                </div>
                              </div>
                              <div class="col-sm-3" style="margin-left: -15px;">
                                <div class="form-group form-group-default">
                                  <label class="pull-left p-b-10" >Date</label>
                                  <input type="calendar" class="form-control">
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
<section class="hidden">
  <div class="container side-padding m-t-50">
    <h2 class="text-center semi-bold">Search and book place for your every need</h2>
    <div class="row">
      <div class="col-md-4 type-section">
        <a href="#"><img src="asset/image/square-500.jpg"></a>
      </div>
      <div class="col-md-4 type-section">
        <a href="#"><img src="asset/image/square-500.jpg"></a>
      </div>
      <div class="col-md-4 type-section">
        <a href="#"><img src="asset/image/square-500.jpg"></a>
      </div>
    </div>
  </div>
</section>
<!-- END BY TYPE -->

<!-- BEGIN FEATURED -->
<section>
  <div class="container side-padding m-t-50">
    <h2 class="text-center semi-bold">Featured / Most Popular</h2>
    <div class="row">
      <?php
      echo $listcollect;
       ?>
    </div>
  </div>
</section>
<!-- END FEATURED -->

<!-- BEGIN FEATURED -->
<section class="hidden">
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
<section class="hidden">
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

<?php include 'footer.php';?>

<!-- CUSTOM SCRIPT HERE -->



<script type="text/javascript" src="assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js">
  $(document).ready(function() {
      $('#living-in').datepicker();
  });
</script>
<!-- ./ END CUSTOM SCRIPT -->
<?php include 'end-html.php';?>
