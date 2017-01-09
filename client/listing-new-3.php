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
            <h1 class="content-title">Upload photos</h1>
            <!-- nav tab -->
            <p class="text-left mail-tab">
            <a href="listing-new-2.php"><i class="fa fa-angle-left m-r-10" ></i>Back</a>
            </p>

            <hr>

            <div>
              <form class="new-space">

                <h5 class="m-t-30">Show us around</h5>
                <p>Upload some photos to show us your space!</p>
                <div class="row">
                  <div class="col-sm-12 p-t-20">
                    <input type="file" name="files[]" id="filer_input2" multiple="multiple">
                  </div>
                </div> <!-- /. row -->

                <p class="text-help" style="margin-top: -10px;">
                  <span class="title">Tips!</span><br>
                  Upload at least 6 but no more than 15 photos of your space to let potential guests know exactly what they are applying for. The photo must be in .JPEG or .JPG or .PNG type with size less than 2MB each.
                </p>

                <button class="btn btn-danger btn-lg pull-right" type="submit">Next</button>
              </form>
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