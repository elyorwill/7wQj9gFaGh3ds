<?php include 'header.php';?>
<!-- BEGIN MENU -->
<link rel="stylesheet" href="asset/plugin/gallery/popup-w3s.css">
<?php include 'top-menu.php';?>
<!-- END HEADER -->

<!-- BEGIN summary -->
<section style="background-color: #fff">
  <div class="inner full-height">
    <section class="p-b-20 m-t-80">
      <div class="container">
        <div class="row">
          <div class="col-md-6 p-t-30">
            <div style="width: 100%">
              <h6 class="block-title m-b-0 text-danger">Petaling</h6>
              <h2 class="m-t-5 light">Scones Space</h2>
              <div class="image-gallery">
                <div id="image1" data-role="main" class="ui-content">
                  <img src="asset/image/gallery-1.jpg" alt="Image 1" onclick="onClick(this)" class="w3-hover-opacity">
                  <div class="pull-left">
                    <p class="gallery-numbering">Image 1 of 2</p>
                  </div>
                </div>
              </div>
              <div class="image-gallery">
                <div id="image1" data-role="main" class="ui-content">
                  <img src="asset/image/gallery-2.jpg" alt="Image 2" onclick="onClick(this)" class="w3-hover-opacity">
                  <div class="pull-left">
                    <p class="gallery-numbering">Image 2 of 2</p>
                  </div>
                </div>
              </div>
              <!-- popup -->
              <div id="modal01" class="w3-modal" onclick="this.style.display='none'">
                <span class="w3-closebtn w3-hover-red w3-text-white w3-xxlarge w3-container w3-display-topright">&times;</span>
                <div class="w3-modal-content w3-animate-zoom">
                  <img id="img01" style="width:100%">
                </div>
              </div>
              <!--Slider Navigation -->
              <div class="pull-right nextback">
                <ul class="pagination m-b-0">
                  <li><a onclick="plusDivs(-1)">❮</a></li>
                  <li><a onclick="plusDivs(+1)">❯</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-6 p-t-100">
            <div>
              <h6 class="block-title m-b-10">About this space</h6>
              <p>This 4 bedroom house can accomodate 11 people. Bring along your own matress to accomodate more people, or rent from us. Fully furnished with aircond, wifi. Ample parking space. Cozy, and quiet. Very serene because we are facing the park.</p>
              <p class="semi-bold m-t-10"><i class="fa fa-clock-o text-danger m-r-10"></i>Check in time: Anytime after 2 PM | Checkout time: 12 PM</p>
              <div class="p-t-10">
                <p class="pull-right m-t-20 hint-text">Read 53 reviews for this space</p>
                <h2 class="text-warning"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-half-o"></i> <i class="fa fa-star-o"></i></h2>
              </div>
            </div>
            <div class="pull-right">
              <h6 class="block-title text-danger m-t-80">Share this space</h6>
              <div class="p-t-10">
                <h4 class="text-white social-icon">
                  <i class="fa fa-facebook m-r-10 facebook" style="padding-left: 14px;"></i>
                  <i class="fa fa-twitter m-r-10 twitter"></i>
                  <i class="fa fa-google-plus m-r-10 youtube" style="padding-left: 14px;"></i>
                </h4>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</section>
<!-- END summary-->
<hr>
<!-- BEGIN about -->
<section>
  <div class="container side-padding m-t-50">
    <div class="row">
      <div class="col-md-7">
        <div class="row m-b-20" style="margin-top: -20px;">
          <h6 class="block-title" style="margin-bottom: -20px;">About the space</h6>
          <table class="table" style="width: 80%">
                  <thead>
                    <tr>
                      <th style="width:40%">&nbsp;</th>
                      <th style="width:60%">&nbsp;</th>
                    </tr>
                  </thead>
                  <tr>
                    <td class="block-title m-b-0 text-danger">
                      Description
                    </td>
                    <td>
                      <ul class="nobullet">
                        <li class="bold">Guest access</li>
                        <li>Everywhere</li>
                        <li class="bold">Interaction with guests</li>
                        <li>Yes, Wherever and whenever is possible</li>
                        <li class="bold">The neighbourhood</li>
                        <li>Facing the park, serene and peaceful</li>
                        <li class="bold">Getting around</li>
                        <li>Uber and My Teksi App are very convenient</li>
                      </ul>
                    </td>
                  </tr>
                  <tr>
                    <td class="block-title m-b-0 text-danger">
                      Extra charges
                    </td>
                    <td>
                      No charge for extra guests
                    </td>
                  </tr>
                  <tr>
                    <td class="block-title m-b-0 text-danger">
                      House rules
                    </td>
                    <td>
                      <ul class="nobullet">
                        <li>No pets allowed</li>
                        <li>No parties</li>
                        <li>No noise in the house after 11 pm</li>
                        <li>Cars to be parked in an orderly manner, not obstructing the traffic</li>
                      </ul>
                    </td>
                  </tr>
                  <tr>
                    <td class="block-title m-b-0 text-danger">
                      Suitable for
                    </td>
                    <td>
                      <ul class="nobullet amen">
                        <li><img src="asset/image/television-small.png"><p>Party / Private Event</p></li>
                        <li><img src="asset/image/television-small.png"><p>Honeymoon</p></li>
                        <li><img src="asset/image/television-small.png"><p>Family Day</p></li>
                      </ul>
                    </td>
                  </tr>
                  <tr>
                    <td class="block-title m-b-0 text-danger">
                      Amenities
                    </td>
                    <td>
                      <ul class="nobullet amen">
                        <li><img src="asset/image/television-small.png"><p>Toiletries</p></li>
                        <li><img src="asset/image/television-small.png"><p>Television</p></li>
                        <li><img src="asset/image/television-small.png"><p>Television</p></li>
                        <li><img src="asset/image/television-small.png"><p>Television</p></li>
                        <li><img src="asset/image/television-small.png"><p>Television</p></li>
                        <li><img src="asset/image/television-small.png"><p>Toiletriestwoe</p></li>
                        <li><img src="asset/image/television-small.png"><p>Television</p></li>
                        <li><img src="asset/image/television-small.png"><p>Television</p></li>
                        <li><img src="asset/image/television-small.png"><p>Television</p></li>
                        <li><img src="asset/image/television-small.png"><p>Television</p></li>
                        <li><img src="asset/image/television-small.png"><p>Television</p></li>
                        <li><img src="asset/image/television-small.png"><p>Television</p></li>
                      </ul>
                    </td>
                  </tr>
                </table>
        </div>
      </div>
      <div class="col-md-5" >
        <div class="booking">
          <h6 class="block-title text-danger">Book Now</h6>
          <h3 class="bold">RM312 per night</h3>
          <form class="p-t-10" role="form">
            <div class="row">
              <div class="col-sm-6">
                <div id="" class="form-group form-group-default input-group date" style="padding-bottom: 4px;">
                  <label class="pull-left p-b-10">Check In</label>
                  <input type="text" class="form-control">
                </div>
              </div>
              <div class="col-sm-6">
                <div id="" class="form-group form-group-default input-group date" style="padding-bottom: 4px;">
                  <label class="pull-left p-b-10">Check Out</label>
                  <input type="text" class="form-control">
                </div>
              </div>
            </div> <!-- /. row -->
            <div class="row">
              <div class="col-sm-12">
                <div class="form-group form-group-default">
                  <label class="pull-left p-b-10">Number of guest</label>
                  <input type="number" class="form-control">
                </div>
              </div>
            </div> <!-- /. row -->
          </form>
          <h6 class="block-title text-danger p-t-10">summary</h6>
          <h5 class="bold">Cozy Studio @ Kinrara</h5>
          <ul class="nobullet">
            <li> RM 312 x 2 nights <span class="pull-right">RM 624.00</span></li>
            <li> Service charges <span class="pull-right">RM 6.20</span></li>
            <li> GST charge <span class="pull-right">RM 12.00</span></li>
            <li><hr></li>
          </ul>
          <p class="bold">Total <span class="pull-right">RM 642.20</span></p>
          <hr>
          <button class="btn btn-block btn-lg btn-danger bold">Book now</button>
        </div>
      </div>
    </div>
  </div>
</section>  
<!-- END about -->  

<!-- BEGIN about -->
<section style="background-color: #f3f3f3; margin-top: 20px;">
  <div class="container side-padding p-t-20 p-b-30">
    <div class="row">
      <h6 class="block-title">About the owner</h6>
      <div class="col-md-3 m-t-15" style="margin-left: -20px;">
        <img src="asset/image/square-500.jpg" class="image-cropper">
      </div>
      <div class="col-md-9 m-t-10 p-l-30">
        <h4 class="bold">Alan</h4>
        <h6 class="hint-text" style="margin-top: -10px;">Subang Jaya, Selangor</h6>
        <p>Hi! I'm Alan from Subang Jaya. I love travelling hence I put my home up on market rent for other people who would like to stay for their trip.</p>
        <button class="btn btn-lg btn-danger bold">Contact owner</button>
      </div>
    </div>
  </div>
</section>  
<!-- END about -->  


<!-- BEGIN about -->
<section>
  <div class="container side-padding m-t-30">
    <div class="row">
      <div class="col-md-12">
        <div class="row">
          <h6 class="block-title m-b-30">Review on this space</h6>
          <div class=" col-md-4 comment-box">
            <div class="comments">
              <h5>Great space! The decor are very modern yet feels so comfortable living in it.</h5>
            </div>
            <div class="comment-detail">
              <div class="pull-right">
                <p class="text-warning"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i></p>
              </div>
              <div class="pull-left">
                <p><i class="fa fa-user m-r-10"></i>Shannon K.</p>
              </div>
            </div>
            <hr style="width: 100%" />
            <div class="via"><i class="fa fa-reply m-r-10"></i><span class="small">Alan replied</span></div>
            <p>Thank you! Great renter to deal with</p>
          </div>
          <div class=" col-md-4 comment-box">
            <div class="comments">
              <h5>Great space! The decor are very modern yet feels so comfortable living in it.</h5>
            </div>
            <div class="comment-detail">
              <div class="pull-right">
                <p class="text-warning"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i></p>
              </div>
              <div class="pull-left">
                <p><i class="fa fa-user m-r-10"></i>Shannon K.</p>
              </div>
            </div>
            <hr style="width: 100%" />
            <div class="via"><i class="fa fa-reply m-r-10"></i><span class="small">Alan replied</span></div>
            <p>Thank you! Great renter to deal with</p>
          </div>
          <div class=" col-md-4 comment-box">
            <div class="comments">
              <h5>Great space! The decor are very modern yet feels so comfortable living in it.</h5>
            </div>
            <div class="comment-detail">
              <div class="pull-right">
                <p class="text-warning"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i></p>
              </div>
              <div class="pull-left">
                <p><i class="fa fa-user m-r-10"></i>Shannon K.</p>
              </div>
            </div>
            <hr style="width: 100%" />
            <div class="via"><i class="fa fa-reply m-r-10"></i><span class="small">Alan replied</span></div>
            <p>Thank you! Great renter to deal with</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>  
<!-- END about -->
<hr class="m-t-40">
<!-- BEGIN about -->
<section>
  <div class="container m-t-30">
    <div class="row">
      <div class="col-md-12" >
        <h6 class="block-title m-b-30">Nearby</h6>
        <div class="row">
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
            <a class="pull-right btn btn-danger btn-lg text-white text-block bold m-t-5" href="#" data-text="view">View space</a>
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
            <a class="pull-right btn btn-danger btn-lg text-white text-block bold m-t-5" href="#" data-text="view">View space</a>
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
            <a class="pull-right btn btn-danger btn-lg text-white text-block bold m-t-5" href="#" data-text="view">View space</a>
            <h4 class="bold">RM 216 /day</h4>
          </div>
        </div>
      </div>
    </div>
    </div>
  </div>
</section>  
<!-- END about -->

<div class="p-t-50">&nbsp;</div>
<?php include 'footer.php';?>

<!-- CUSTOM SCRIPT HERE -->
<script>
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
}
</script>

<script>
  var slideIndex = 1;
  showDivs(slideIndex);

  function plusDivs(n) {
      showDivs(slideIndex += n);
  }

  function showDivs(n) {
      var i;
      var x = document.getElementsByClassName("image-gallery");
      if (n > x.length) {slideIndex = 1} 
      if (n < 1) {slideIndex = x.length} ;
      for (i = 0; i < x.length; i++) {
          x[i].style.display = "none"; 
      }
      x[slideIndex-1].style.display = "block"; 
  }
</script>
<!-- ./ END CUSTOM SCRIPT -->
<?php include 'end-html.php';?>
    
