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
            <h1 class="content-title">New Leisure Listing</h1>
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
                      <input type="radio" name="leisure-type" value="restaurant" id="leisure-restaurant">
                        <label class="m-l-10 m-t-10" for="leisure-restaurant">Restaurant</label><br>
                      <input type="radio" name="leisure-type" value="cafe" id="leisure-cafe">
                        <label class="m-l-10 m-t-10" for="leisure-cafe">Coffee Shop / Cafe</label><br>
                      <input type="radio" name="leisure-type" value="studio" id="leisure-studio">
                        <label class="m-l-10 m-t-10" for="leisure-studio">Studio</label><br>
                      <input type="radio" name="leisure-type" value="fitness" id="leisure-fitness">
                        <label class="m-l-10 m-t-10" for="leisure-fitness">Fitness Centre</label><br>
                    </div>
                    <div class="col-md-4 radio radio-danger">
                      <input type="radio" name="leisure-type" value="cinema" id="leisure-cinema">
                        <label class="m-l-10 m-t-10" for="leisure-cinema">Cinema</label><br>
                      <input type="radio" name="leisure-type" value="poolside" id="leisure-poolside">
                        <label class="m-l-10 m-t-10" for="leisure-poolside">Pool Side Bungalow</label><br>
                      <input type="radio" name="leisure-type" value="wedding" id="leisure-wedding">
                        <label class="m-l-10 m-t-10" for="leisure-wedding">Wedding Hall</label><br>
                    </div>
                    <div class="col-md-4 radio radio-danger">
                      <input type="radio" name="leisure-type" value="temple" id="leisure-temple">
                        <label class="m-l-10 m-t-10" for="leisure-temple">Temple</label><br>
                      <input type="radio" name="leisure-type" value="kitchen" id="leisure-kitchen">
                        <label class="m-l-10 m-t-10" for="leisure-kitchen">Kitchen</label><br>
                      <input type="radio" name="leisure-type" value="garden" id="leisure-garden">
                        <label class="m-l-10 m-t-10" for="leisure-garden">Garden / Farm</label><br>
                    </div>
                  <br>
                  <h5 class="m-t-60">In detail, describe your space:</h5>
                  <div class="col-md-3 form-imaged" style="margin-left: -15px;">
                    <img src="asset/image/door.png" />
                    <input type="number" class="form-control" name="bedroom" min="0" max="15" placeholder="# rooms">
                  </div>
                  <div class="col-md-3 form-imaged">
                    <img src="asset/image/table.png" />
                    <input type="number" class="form-control" name="bathroom" min="0" max="15" placeholder="# tables">
                  </div>
                  <div class="col-md-3 form-imaged">
                    <img src="asset/image/chair.png" />
                    <input type="number" class="form-control" name="accomodate" min="0" max="15" placeholder="# chairs">
                  </div>
                  <div class="col-md-3 form-imaged">
                    <img src="asset/image/toilet.png" />
                    <input type="number" class="form-control" name="bathroom" min="0" max="15" placeholder="# bathrooms">
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
                        <label class="m-l-10 m-t-10" for="amen-tv">Monitor / TV</label><br>
                      <input type="checkbox" name="amenities" value="aircond" id="amen-aircond">
                        <label class="m-l-10 m-t-10" for="amen-aircond">Air-conditioning</label><br>
                      <input type="checkbox" name="amenities" value="parking" id="amen-park">
                        <label class="m-l-10 m-t-10" for="amen-park">Free parking on premises</label><br>
                      <input type="checkbox" name="amenities" value="pets" id="amen-pets">
                        <label class="m-l-10 m-t-10" for="amen-pets">Pets allowed</label><br>
                      <input type="checkbox" name="amenities" value="kid" id="amen-kid">
                        <label class="m-l-10 m-t-10" for="amen-kid">Family / kid friendly</label><br>
                      <input type="checkbox" name="amenities" value="events" id="amen-events">
                        <label class="m-l-10 m-t-10" for="amen-events">Suitable for events</label><br>
                      <input type="checkbox" name="amenities" value="smoke" id="amen-smoke">
                        <label class="m-l-10 m-t-10" for="amen-smoke">Smoking allowed</label><br>
                    </div>
                    <div class="col-md-4 checkbox check-danger">
                      <input type="checkbox" name="amenities" value="wheelchair" id="amen-wheel">
                        <label class="m-l-10 m-t-10" for="amen-wheel">Wheelchair accessible</label><br>
                      <input type="checkbox" name="amenities" value="elevator" id="amen-elevator">
                        <label class="m-l-10 m-t-10" for="amen-elevator">Elevator in building</label><br>
                      <input type="checkbox" name="amenities" value="fireplace" id="amen-fireplace">
                        <label class="m-l-10 m-t-10" for="amen-fireplace">Indoor fireplace</label><br>
                      <input type="checkbox" name="amenities" value="laptop" id="amen-laptop">
                        <label class="m-l-10 m-t-10" for="amen-laptop">Laptop friendly workspace</label><br>
                      <input type="checkbox" name="amenities" value="cctv" id="amen-cctv">
                        <label class="m-l-10 m-t-10" for="amen-cctv">CCTV</label><br>
                      <input type="checkbox" name="amenities" value="alarm" id="amen-alarm">
                        <label class="m-l-10 m-t-10" for="amen-alarm">Alarm</label><br>
                      <input type="checkbox" name="amenities" value="ups" id="amen-ups">
                        <label class="m-l-10 m-t-10" for="amen-ups">UPS</label><br>
                      <input type="checkbox" name="amenities" value="drawer" id="amen-drawer">
                        <label class="m-l-10 m-t-10" for="amen-drawer">Drawer / Locker</label><br>
                      <input type="checkbox" name="amenities" value="cabinet" id="amen-cabinet">
                        <label class="m-l-10 m-t-10" for="amen-cabinet">Cabinet</label><br>
                    </div>
                    <div class="col-md-4 checkbox check-danger">
                      <input type="checkbox" name="amenities" value="kiosk" id="amen-kiosk">
                        <label class="m-l-10 m-t-10" for="amen-kiosk">Computer / Kiosk</label><br>
                      <input type="checkbox" name="amenities" value="whiteboard" id="amen-whiteboard">
                        <label class="m-l-10 m-t-10" for="amen-whiteboard">Whiteboard</label><br>
                      <input type="checkbox" name="amenities" value="projector" id="amen-projector">
                        <label class="m-l-10 m-t-10" for="amen-projector">Projector</label><br>
                      <input type="checkbox" name="amenities" value="guard" id="amen-guard">
                        <label class="m-l-10 m-t-10" for="amen-guard">Security Guard</label><br>
                      <input type="checkbox" name="amenities" value="sound" id="amen-sound">
                        <label class="m-l-10 m-t-10" for="amen-sound">Sound System</label><br>
                      <input type="checkbox" name="amenities" value="food" id="amen-food">
                        <label class="m-l-10 m-t-10" for="amen-food">Outside Food / Beverage Allowed</label><br>
                      <input type="checkbox" name="amenities" value="light" id="amen-light">
                        <label class="m-l-10 m-t-10" for="amen-light">Lighting</label><br>
                      <input type="checkbox" name="amenities" value="mic" id="amen-mic">
                        <label class="m-l-10 m-t-10" for="amen-mic">Microphone</label><br>
                    </div>
                  <br>
                  <h5 class="m-t-50">What are the travel purposes suitable for the space</h5>
                    <div class="row" style="margin-left: -7px;">
                      <div class="col-md-2 imagecheck " >
                        <input type="checkbox" name="purpose" value="meeting" id="purpose-meeting">
                          <label class="m-l-10 m-t-10" for="purpose-meeting">
                            <img src="asset/image/bathtub.png" />
                            <p>Celebration</p>
                          </label><br>
                      </div>
                      <div class="col-md-2 imagecheck">
                        <input type="checkbox" name="purpose" value="gathering" id="purpose-gathering">
                          <label class="m-l-10 m-t-10" for="purpose-gathering">
                            <img src="asset/image/bathtub.png" />
                            <p>Gathering</p>
                          </label><br>
                      </div>
                      <div class="col-md-2 imagecheck">
                        <input type="checkbox" name="purpose" value="networking" id="purpose-networking">
                          <label class="m-l-10 m-t-10" for="purpose-networking">
                            <img src="asset/image/bathtub.png" />
                            <p>Networking</p>
                          </label><br>
                      </div>
                      <div class="col-md-2 imagecheck">
                        <input type="checkbox" name="purpose" value="seminar" id="purpose-seminar">
                          <label class="m-l-10 m-t-10" for="purpose-seminar">
                            <img src="asset/image/bathtub.png" />
                            <p>Conference</p>
                          </label><br>
                      </div>
                      <div class="col-md-2 imagecheck">
                        <input type="checkbox" name="purpose" value="dining" id="purpose-dining">
                          <label class="m-l-10 m-t-10" for="purpose-dining">
                            <img src="asset/image/bathtub.png" />
                            <p>Dining</p>
                          </label><br>
                      </div>
                      <div class="col-md-2 imagecheck">
                        <input type="checkbox" name="purpose" value="shooting" id="purpose-shooting">
                          <label class="m-l-10 m-t-10" for="purpose-shooting">
                            <img src="asset/image/bathtub.png" />
                            <p>Photo Shooting</p>
                          </label><br>
                      </div>
                    </div>
                    <div class="row" style="margin-left: -7px;">
                      <div class="col-md-2 imagecheck " >
                        <input type="checkbox" name="purpose" value="building" id="purpose-building">
                          <label class="m-l-10 m-t-10" for="purpose-building">
                            <img src="asset/image/bathtub.png" />
                            <p>Team Building</p>
                          </label><br>
                      </div>
                      <div class="col-md-2 imagecheck">
                        <input type="checkbox" name="purpose" value="training" id="purpose-training">
                          <label class="m-l-10 m-t-10" for="purpose-training">
                            <img src="asset/image/bathtub.png" />
                            <p>Training Class</p>
                          </label><br>
                      </div>
                      <div class="col-md-2 imagecheck">
                        <input type="checkbox" name="purpose" value="wedding" id="purpose-wedding">
                          <label class="m-l-10 m-t-10" for="purpose-wedding">
                            <img src="asset/image/bathtub.png" />
                            <p>Wedding</p>
                          </label><br>
                      </div>
                      <div class="col-md-2 imagecheck">
                        <input type="checkbox" name="purpose" value="press" id="purpose-press">
                          <label class="m-l-10 m-t-10" for="purpose-press">
                            <img src="asset/image/bathtub.png" />
                            <p>Press Conf</p>
                          </label><br>
                      </div>
                      <div class="col-md-2 imagecheck">
                        <input type="checkbox" name="purpose" value="presentation" id="purpose-presentation">
                          <label class="m-l-10 m-t-10" for="purpose-presentation">
                            <img src="asset/image/bathtub.png" />
                            <p>Presentation</p>
                          </label><br>
                      </div>
                      <div class="col-md-2 imagecheck">
                        <input type="checkbox" name="purpose" value="concert" id="purpose-concert">
                          <label class="m-l-10 m-t-10" for="purpose-concert">
                            <img src="asset/image/bathtub.png" />
                            <p>Show/Concert</p>
                          </label><br>
                      </div>
                    </div>
                    <div class="row" style="margin-left: -7px;">
                      <div class="col-md-2 imagecheck">
                        <input type="checkbox" name="purpose" value="roadshow" id="purpose-roadshow">
                          <label class="m-l-10 m-t-10" for="purpose-roadshow">
                            <img src="asset/image/bathtub.png" />
                            <p>Launching</p>
                          </label><br>
                      </div>
                      <div class="col-md-2 imagecheck">
                        <input type="checkbox" name="purpose" value="carnival" id="purpose-carnival">
                          <label class="m-l-10 m-t-10" for="purpose-carnival">
                            <img src="asset/image/bathtub.png" />
                            <p>Carnival / Fair</p>
                          </label><br>
                      </div>
                    </div>
                  <br>
                  <h5 class="m-t-50">Let us know if there are any rules at your space</h5>
                  <textarea class="form-control" name="Text1" cols ="40" rows="5" placeholder="List your house rule (if any)"></textarea>
                  <br>
                  <button class="btn btn-danger btn-lg pull-right" type="submit" action="leisure-new-2.php">Next</button>
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