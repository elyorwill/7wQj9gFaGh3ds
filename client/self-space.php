<?php include 'header.php';?>
<!-- BEGIN MENU -->
<link rel="stylesheet" href="asset/plugin/gallery/popup-w3s.css">
<?php include 'top-menu.php';?>
<!-- END HEADER -->
  <!-- EMPTY BAR -->
  <section class="p-b-15 p-t-15 text-center text-white">
    <h3 class="inline text-white xs-m-b-20">&nbsp;</h3>
  </section>
<?php include 'nested-menu.php';?> 
<!-- BEGIN summary -->
<section style="background-color: #fff">
  <div class="inner full-height">
    <section class="p-b-20 p-t-30">
      <div class="container" style="margin-top: 5px;">

          <div class="col-md-12">
          <h1 class="content-title">Scones Space</h1>
          <div class="pull-right" style="margin-top: -6px;">
          <button class="btn btn-success">Edit Space Detail</button>
          <button class="btn btn-bordered btn-success">Hide Space</button>
        </div>
            <p class="text-left mail-tab">
            <a href="listing.php"><i class="fa fa-angle-left m-r-10" ></i>Return to listings</a>
            </p>
            <hr>

        
        <div class="row">
          <div class="col-md-6 p-t-30">
            <div style="width: 100%">
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
          <div class="col-md-6 p-t-15">
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
        <div class="row m-b-20">
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
      <div class="col-md-5 booking" >

        <h6 class="block-title" style="margin-bottom: -20px; margin-top: 34px;">Booking History &amp; Review</h6>
        
        <table class="table" style="width: 100%">
          <thead>
            <tr>
              <th style="width:40%">&nbsp;</th>
              <th style="width:60%">&nbsp;</th>
            </tr>
          </thead>
          <tr>
            <td class="block-title m-b-0">
              <i class="fa fa-user m-r-10"></i>Mr Adam
            </td>
            <td>
              <ul class="nobullet">
                <li class="bold">24 - 26 Dec 2016</li>
                <li class="text-warning"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></li>
                <li>Lovely home. Definitely coming back for next holiday.</li>
              </ul>
            </td>
          </tr>
          <tr>
            <td class="block-title m-b-0">
              <i class="fa fa-user m-r-10"></i>Mrs El
            </td>
            <td>
              <ul class="nobullet">
                <li class="bold">7 - 12 Aug 2016</li>
                <li class="text-warning"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></li>
                <li>Lovely home. Definitely coming back for next holiday.</li>
              </ul>
            </td>
          </tr>
          <tr>
            <td class="block-title m-b-0">
              <i class="fa fa-user m-r-10"></i>Mr Adam
            </td>
            <td>
              <ul class="nobullet">
                <li class="bold">24 - 26 July 2016</li>
                <li class="text-warning"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></li>
                <li>Lovely home. Definitely coming back for next holiday.</li>
              </ul>
            </td>
          </tr>
          
        </table>
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
    
