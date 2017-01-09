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
            <h1 class="content-title">New Working Listing</h1>
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
                      <input type="radio" name="working-type" value="private" id="working-private">
                        <label class="m-l-10 m-t-10" for="working-private">Private Office</label><br>
                      <input type="radio" name="working-type" value="meeting" id="working-meeting">
                        <label class="m-l-10 m-t-10" for="working-meeting">Meeting Room</label><br>
                      <input type="radio" name="working-type" value="conference" id="working-conference">
                        <label class="m-l-10 m-t-10" for="working-conference">Conference Room</label><br>
                      <input type="radio" name="working-type" value="store" id="working-store">
                        <label class="m-l-10 m-t-10" for="working-store">Store / Warehouse</label><br>
                    </div>
                    <div class="col-md-4 radio radio-danger">
                      <input type="radio" name="working-type" value="board" id="working-board">
                        <label class="m-l-10 m-t-10" for="working-board">Board Room</label><br>
                      <input type="radio" name="working-type" value="presentation" id="working-presentation">
                        <label class="m-l-10 m-t-10" for="working-presentation">Presentation Room</label><br>
                      <input type="radio" name="working-type" value="training" id="working-training">
                        <label class="m-l-10 m-t-10" for="working-training">Training Room</label><br>
                      <input type="radio" name="working-type" value="workshop" id="working-workshop">
                        <label class="m-l-10 m-t-10" for="working-workshop">Workshop</label><br>
                    </div>
                    <div class="col-md-4 radio radio-danger">
                      <input type="radio" name="working-type" value="co" id="working-co">
                        <label class="m-l-10 m-t-10" for="working-co">Co-working</label><br>
                      <input type="radio" name="working-type" value="cubicle" id="working-cubicle">
                        <label class="m-l-10 m-t-10" for="working-cubicle">Cubicle</label><br>
                      <input type="radio" name="working-type" value="remote" id="working-remote">
                        <label class="m-l-10 m-t-10" for="working-remote">Remote Office</label><br>
                    </div>
                  <br>
                  <h5 class="m-t-60">In detail, describe your space:</h5>
                  <div class="col-md-2 form-imaged" style="margin-left: -15px;">
                    <img src="asset/image/door.png" />
                    <input type="number" class="form-control" name="bedroom" min="0" max="15" placeholder="# rooms">
                  </div>
                  <div class="col-md-2 form-imaged">
                    <img src="asset/image/table.png" />
                    <input type="number" class="form-control" name="bathroom" min="0" max="15" placeholder="# tables">
                  </div>
                  <div class="col-md-2 form-imaged">
                    <img src="asset/image/chair.png" />
                    <input type="number" class="form-control" name="accomodate" min="0" max="15" placeholder="# chairs">
                  </div>
                  <div class="col-md-2 form-imaged">
                    <img src="asset/image/technology.png" />
                    <input type="number" class="form-control" name="bedroom" min="0" max="15" placeholder="# powercords">
                  </div>
                  <div class="col-md-2 form-imaged">
                    <img src="asset/image/toilet.png" />
                    <input type="number" class="form-control" name="bathroom" min="0" max="15" placeholder="# bathrooms">
                  </div>
                  <div class="col-md-2 form-imaged">
                    <img src="asset/image/restaurant.png" />
                    <input type="number" class="form-control" name="accomodate" min="0" max="15" placeholder="# pantry">
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
                      <input type="checkbox" name="amenities" value="events" id="amen-events">
                        <label class="m-l-10 m-t-10" for="amen-events">Suitable for events</label><br>
                      <input type="checkbox" name="amenities" value="smoke" id="amen-smoke">
                        <label class="m-l-10 m-t-10" for="amen-smoke">Smoking allowed</label><br>
                      <input type="checkbox" name="amenities" value="wheelchair" id="amen-wheel">
                        <label class="m-l-10 m-t-10" for="amen-wheel">Wheelchair accessible</label><br>
                      <input type="checkbox" name="amenities" value="elevator" id="amen-elevator">
                        <label class="m-l-10 m-t-10" for="amen-elevator">Elevator in building</label><br>
                      <input type="checkbox" name="amenities" value="fireplace" id="amen-fireplace">
                        <label class="m-l-10 m-t-10" for="amen-fireplace">Indoor fireplace</label><br>
                    </div>
                    <div class="col-md-4 checkbox check-danger">
                      <input type="checkbox" name="amenities" value="reception" id="amen-reception">
                        <label class="m-l-10 m-t-10" for="amen-reception">Reception</label><br>
                      <input type="checkbox" name="amenities" value="projector" id="amen-projector">
                        <label class="m-l-10 m-t-10" for="amen-projector">Projector</label><br>
                      <input type="checkbox" name="amenities" value="printer" id="amen-printer">
                        <label class="m-l-10 m-t-10" for="amen-printer">Printer</label><br>
                      <input type="checkbox" name="amenities" value="visitor" id="amen-visitor">
                        <label class="m-l-10 m-t-10" for="amen-visitor">Visitor Allowed</label><br>
                      <input type="checkbox" name="amenities" value="voip" id="amen-voip">
                        <label class="m-l-10 m-t-10" for="amen-voip">Key Phone / VOiP</label><br>
                      <input type="checkbox" name="amenities" value="cctv" id="amen-cctv">
                        <label class="m-l-10 m-t-10" for="amen-cctv">CCTV</label><br>
                      <input type="checkbox" name="amenities" value="alarm" id="amen-alarm">
                        <label class="m-l-10 m-t-10" for="amen-alarm">Alarm</label><br>
                      <input type="checkbox" name="amenities" value="router" id="amen-router">
                        <label class="m-l-10 m-t-10" for="amen-router">Router / Switch</label><br>
                      <input type="checkbox" name="amenities" value="ups" id="amen-ups">
                        <label class="m-l-10 m-t-10" for="amen-ups">UPS</label><br>
                      <input type="checkbox" name="amenities" value="drawer" id="amen-drawer">
                        <label class="m-l-10 m-t-10" for="amen-drawer">Drawer / Locker</label><br>
                    </div>
                    <div class="col-md-4 checkbox check-danger">
                      <input type="checkbox" name="amenities" value="cabinet" id="amen-cabinet">
                        <label class="m-l-10 m-t-10" for="amen-cabinet">Cabinet</label><br>
                      <input type="checkbox" name="amenities" value="kiosk" id="amen-kiosk">
                        <label class="m-l-10 m-t-10" for="amen-kiosk">Computer / Kiosk</label><br>
                      <input type="checkbox" name="amenities" value="scanner" id="amen-scanner">
                        <label class="m-l-10 m-t-10" for="amen-scanner">Scanner / Copier</label><br>
                      <input type="checkbox" name="amenities" value="whiteboard" id="amen-whiteboard">
                        <label class="m-l-10 m-t-10" for="amen-whiteboard">Whiteboard</label><br>
                      <input type="checkbox" name="amenities" value="fax" id="amen-fax">
                        <label class="m-l-10 m-t-10" for="amen-fax">Fax Machine</label><br>
                      <input type="checkbox" name="amenities" value="firstaid" id="amen-firstaid">
                        <label class="m-l-10 m-t-10" for="amen-firstaid">First Aid Kit</label><br>
                      <input type="checkbox" name="amenities" value="speaker" id="amen-speaker">
                        <label class="m-l-10 m-t-10" for="amen-speaker">Speaker</label><br>
                      <input type="checkbox" name="amenities" value="guard" id="amen-guard">
                        <label class="m-l-10 m-t-10" for="amen-guard">Security Guard</label><br>
                    </div>
                  <br>
                  <h5 class="m-t-50">What are the travel purposes suitable for the space</h5>
                    <div style="margin-left: -22px;">
                      <div class="col-md-2 imagecheck " >
                        <input type="checkbox" name="purpose" value="meeting" id="purpose-meeting">
                          <label class="m-l-10 m-t-10" for="purpose-meeting">
                            <img src="asset/image/bathtub.png" />
                            <p>Meeting</p>
                          </label><br>
                      </div>
                      <div class="col-md-2 imagecheck">
                        <input type="checkbox" name="purpose" value="conference" id="purpose-conference">
                          <label class="m-l-10 m-t-10" for="purpose-conference">
                            <img src="asset/image/bathtub.png" />
                            <p>Conferencing</p>
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
                        <input type="checkbox" name="purpose" value="event" id="purpose-event">
                          <label class="m-l-10 m-t-10" for="purpose-event">
                            <img src="asset/image/bathtub.png" />
                            <p>Event</p>
                          </label><br>
                      </div>
                      <div class="col-md-2 imagecheck">
                        <input type="checkbox" name="purpose" value="training" id="purpose-training">
                          <label class="m-l-10 m-t-10" for="purpose-training">
                            <img src="asset/image/bathtub.png" />
                            <p>Training</p>
                          </label><br>
                      </div>
                      <div class="col-md-2 imagecheck">
                        <input type="checkbox" name="purpose" value="seminar" id="purpose-seminar">
                          <label class="m-l-10 m-t-10" for="purpose-seminar">
                            <img src="asset/image/bathtub.png" />
                            <p>Seminar</p>
                          </label><br>
                      </div>
                    </div>
                  <br>
                  <h5 class="m-t-50">Let us know if there are any rules at your space</h5>
                  <textarea class="form-control" name="Text1" cols ="40" rows="5" placeholder="List your house rule (if any)"></textarea>
                  <br>
                  <button class="btn btn-danger btn-lg pull-right" type="submit" action="working-new-2.php">Next</button>
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