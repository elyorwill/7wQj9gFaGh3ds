<?php include 'header.php';?>
<?php include 'top-menu.php';?>
<!-- BEGIN CONTENT -->
  <!-- EMPTY BAR -->
  <section class="p-b-15 p-t-15 text-center text-white">
    <h3 class="inline text-white xs-m-b-20">&nbsp;</h3>
  </section>
<?php include 'nested-menu.php';?> 
    <!-- START USER SECTION -->
    <section style="background-color: #fff;">
      <div class="container">
        <div class="content-container clearfix">
          <div class="col-md-12">
            <h1 class="content-title">New Living Listing</h1>
            <!-- nav tab -->
            <p class="text-left mail-tab">
            <a href="listing-new.php"><i class="fa fa-angle-left m-r-10" ></i>Back</a>
            </p>

            <hr>

            <div>
            	<div class="col-md-12">
                <form class="new-space">
              		<h5>Tell us about your space:</h5>
                  <input type="text" class="form-control" placeholder="Give your space a unique name">
                  <br>
                  <textarea class="form-control" name="Text1" cols ="40" rows="5" placeholder="In not more than 200 words, describe your space"></textarea>
                  <br>
                  <h5 class="m-t-40">What is your space type?</h5>
                    <div class="col-md-4 radio radio-danger">
                      <input type="radio" name="living-type" value="apartment" id="living-apartment">
                        <label class="m-l-10 m-t-10" for="living-apartment">Apartment</label><br>
                      <input type="radio" name="living-type" value="condominium" id="living-condo">
                        <label class="m-l-10 m-t-10" for="living-condo">Condominium</label><br>
                      <input type="radio" name="living-type" value="house" id="living-house">
                        <label class="m-l-10 m-t-10" for="living-house">House</label><br>
                    </div>
                    <div class="col-md-4 radio radio-danger">
                      <input type="radio" name="living-type" value="guest" id="living-guest">
                        <label class="m-l-10 m-t-10" for="living-guest">Guest House</label><br>
                      <input type="radio" name="living-type" value="bnb" id="living-bnb">
                        <label class="m-l-10 m-t-10" for="living-bnb">Bed &amp; Breakfast</label><br>
                      <input type="radio" name="living-type" value="floor" id="living-floor">
                        <label class="m-l-10 m-t-10" for="living-floor">Entire Floor</label><br>
                    </div>
                    <div class="col-md-4 radio radio-danger">
                      <input type="radio" name="living-type" value="villa" id="living-villa">
                        <label class="m-l-10 m-t-10" for="living-villa">Villa &amp; Chalet</label><br>
                      <input type="radio" name="living-type" value="bungalow" id="living-bungalow">
                        <label class="m-l-10 m-t-10" for="living-bungalow">Bungalow</label><br>
                      <input type="radio" name="living-type" value="other" id="living-other">
                        <label class="m-l-10 m-t-10" for="living-other">Other</label><br>
                    </div>
                  <br>
                  <h5 class="m-t-60">In detail, describe your space:</h5>
                  <div class="col-md-4 form-imaged" style="margin-left: -15px;">
                    <img src="asset/image/bed.png" />
                    <input type="number" class="form-control" name="bedroom" min="1" max="15" placeholder="Number of bedroom available">
                  </div>
                  <div class="col-md-4 form-imaged">
                    <img src="asset/image/bathtub.png" />
                    <input type="number" class="form-control" name="bathroom" min="1" max="15" placeholder="Number of bathroom available">
                  </div>
                  <div class="col-md-4 form-imaged">
                    <img src="asset/image/group.png" />
                    <input type="number" class="form-control" name="accomodate" min="1" max="15" placeholder="Number of maximum guest to accomodate">
                  </div>
                  
                  <br>
                  <h5 class="m-t-60">Would the guest have an entire access or partial access of the space?</h5>
                    <div class="col-md-4 radio radio-danger" style="margin-top: -5px;">
                      <input type="radio" name="access-type" value="entire" id="type-entire">
                        <label class="m-l-10 m-t-10" for="type-entire">Entire Space</label><br>
                    </div>
                    <div class="col-md-4 radio radio-danger">
                      <input type="radio" name="access-type" value="private" id="type-private">
                        <label class="m-l-10 m-t-10" for="type-private">Private Space</label><br>
                    </div>
                    <div class="col-md-4 radio radio-danger">
                      <input type="radio" name="access-type" value="shared" id="type-shared">
                        <label class="m-l-10 m-t-10" for="type-shared">Shared Space</label><br>
                    </div>
                  <br>
                  <h5 class="m-t-50">What are the amenities available at the space?</h5>
                    <div class="col-md-4 checkbox check-danger" style="margin-top: -5px;">
                      <input type="checkbox" name="amenities" value="wifi" id="amen-wifi">
                        <label class="m-l-10 m-t-10" for="amen-wifi">WiFi</label><br>
                      <input type="checkbox" name="amenities" value="lan" id="amen-lan">
                        <label class="m-l-10 m-t-10" for="amen-lan">Internet cable (LAN)</label><br>
                      <input type="checkbox" name="amenities" value="tv" id="amen-tv">
                        <label class="m-l-10 m-t-10" for="amen-tv">Television</label><br>
                      <input type="checkbox" name="amenities" value="essentials" id="amen-essen">
                        <label class="m-l-10 m-t-10" for="amen-essen">Essentials</label><br>
                      <input type="checkbox" name="amenities" value="kid" id="amen-kid">
                        <label class="m-l-10 m-t-10" for="amen-kid">Family / kid friendly</label><br>
                      <input type="checkbox" name="amenities" value="events" id="amen-events">
                        <label class="m-l-10 m-t-10" for="amen-events">Suitable for events</label><br>
                      <input type="checkbox" name="amenities" value="buzzer" id="amen-buzzer">
                        <label class="m-l-10 m-t-10" for="amen-buzzer">Buzzer / wireless intercom</label><br>
                      <input type="checkbox" name="amenities" value="doorman" id="amen-doorman">
                        <label class="m-l-10 m-t-10" for="amen-doorman">Doorman</label><br>
                      <input type="checkbox" name="amenities" value="pool" id="amen-pool">
                        <label class="m-l-10 m-t-10" for="amen-pool">Pool</label><br>
                      <input type="checkbox" name="amenities" value="laptop" id="amen-laptop">
                        <label class="m-l-10 m-t-10" for="amen-laptop">Laptop friendly workspace</label><br>
                    </div>
                    <div class="col-md-4 checkbox check-danger">
                      <input type="checkbox" name="amenities" value="heat" id="amen-heat">
                        <label class="m-l-10 m-t-10" for="amen-heat">Heating</label><br>
                      <input type="checkbox" name="amenities" value="kitchen" id="amen-kitchen">
                        <label class="m-l-10 m-t-10" for="amen-kitchen">Kitchen</label><br>
                      <input type="checkbox" name="amenities" value="washer" id="amen-washer">
                        <label class="m-l-10 m-t-10" for="amen-washer">Washer</label><br>
                      <input type="checkbox" name="amenities" value="dryer" id="amen-dryer">
                        <label class="m-l-10 m-t-10" for="amen-dryer">Dryer</label><br>
                      <input type="checkbox" name="amenities" value="smoke" id="amen-smoke">
                        <label class="m-l-10 m-t-10" for="amen-smoke">Smoking allowed</label><br>
                      <input type="checkbox" name="amenities" value="wheelchair" id="amen-wheel">
                        <label class="m-l-10 m-t-10" for="amen-wheel">Wheelchair accessible</label><br>
                      <input type="checkbox" name="amenities" value="hot" id="amen-hot">
                        <label class="m-l-10 m-t-10" for="amen-hot">Hot tub</label><br>
                      <input type="checkbox" name="amenities" value="gym" id="amen-gym">
                        <label class="m-l-10 m-t-10" for="amen-gym">Gym</label><br>
                      <input type="checkbox" name="amenities" value="24hr" id="amen-24hr">
                        <label class="m-l-10 m-t-10" for="amen-24hr">24 hour check-in</label><br>
                    </div>
                    <div class="col-md-4 checkbox check-danger">
                      <input type="checkbox" name="amenities" value="parking" id="amen-park">
                        <label class="m-l-10 m-t-10" for="amen-park">Free parking on premises</label><br>
                      <input type="checkbox" name="amenities" value="aircond" id="amen-aircond">
                        <label class="m-l-10 m-t-10" for="amen-aircond">Air-conditioning</label><br>
                      <input type="checkbox" name="amenities" value="bfast" id="amen-bfast">
                        <label class="m-l-10 m-t-10" for="amen-bfast">Breakfast</label><br>
                      <input type="checkbox" name="amenities" value="pets" id="amen-pets">
                        <label class="m-l-10 m-t-10" for="amen-pets">Pets allowed</label><br>
                      <input type="checkbox" name="amenities" value="elevator" id="amen-elevator">
                        <label class="m-l-10 m-t-10" for="amen-elevator">Elevator in building</label><br>
                      <input type="checkbox" name="amenities" value="fireplace" id="amen-fireplace">
                        <label class="m-l-10 m-t-10" for="amen-fireplace">Indoor fireplace</label><br>
                      <input type="checkbox" name="amenities" value="hanger" id="amen-hanger">
                        <label class="m-l-10 m-t-10" for="amen-hanger">Hangers</label><br>
                      <input type="checkbox" name="amenities" value="iron" id="amen-iron">
                        <label class="m-l-10 m-t-10" for="amen-iron">Iron</label><br>
                      <input type="checkbox" name="amenities" value="hair" id="amen-hair">
                        <label class="m-l-10 m-t-10" for="amen-hair">Hair Dryer</label><br>
                    </div>
                  <br>
                  <h5 class="m-t-50">What are the travel purposes suitable for the space</h5>
                    <div style="margin-left: -22px;">
                      <div class="col-md-2 imagecheck " >
                        <input type="checkbox" name="purpose" value="business" id="purpose-business">
                          <label class="m-l-10 m-t-10" for="purpose-business">
                            <img src="asset/image/bathtub.png" />
                            <p>Business Trip</p>
                          </label><br>
                      </div>
                      <div class="col-md-2 imagecheck">
                        <input type="checkbox" name="purpose" value="holiday" id="purpose-holiday">
                          <label class="m-l-10 m-t-10" for="purpose-holiday">
                            <img src="asset/image/bathtub.png" />
                            <p>Holiday Trip</p>
                          </label><br>
                      </div>
                      <div class="col-md-2 imagecheck">
                        <input type="checkbox" name="purpose" value="short" id="purpose-short">
                          <label class="m-l-10 m-t-10" for="purpose-short">
                            <img src="asset/image/bathtub.png" />
                            <p>Short Trip</p>
                          </label><br>
                      </div>
                      <div class="col-md-2 imagecheck">
                        <input type="checkbox" name="purpose" value="long" id="purpose-long">
                          <label class="m-l-10 m-t-10" for="purpose-long">
                            <img src="asset/image/bathtub.png" />
                            <p>Long Trip</p>
                          </label><br>
                      </div>
                      <div class="col-md-2 imagecheck">
                        <input type="checkbox" name="purpose" value="honey" id="purpose-honey">
                          <label class="m-l-10 m-t-10" for="purpose-honey">
                            <img src="asset/image/bathtub.png" />
                            <p>Honeymoon</p>
                          </label><br>
                      </div>
                    </div>
                  <br>
                  <h5 class="m-t-50">Let us know if there are any rules at your space</h5>
                  <textarea class="form-control" name="Text1" cols ="40" rows="5" placeholder="List your house rule (if any)"></textarea>
                  <br>
                  <button class="btn btn-danger btn-lg pull-right" type="submit" action="living-new-2.php">Next</button>
                </form>
            	</div>
            </div>
            
        </div>
      </div>
    </div>
  </section>
    <!-- END USER SECTION -->

<!-- end page content -->

<?php include 'footer.php';?>
<!-- BEGIN YOUR CUSTOM JS -->

<!-- CUSTOM SCRIPT HERE -->


<!-- ./ END CUSTOM SCRIPT -->
<?php include 'end-html.php';?>