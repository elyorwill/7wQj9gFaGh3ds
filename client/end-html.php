


    <script src="assets/plugins/bootstrap-typehead/typeahead.bundle.min.js"></script>
    <script src="assets/plugins/bootstrap-typehead/typeahead.jquery.min.js"></script>
 

    <!-- BEGIN CORE TEMPLATE JS -->
    <script src="pages/js/pages.min.js"></script>
    <!-- END CORE TEMPLATE JS -->
    <!-- BEGIN PAGE LEVEL JS -->
    <script src="assets/js/form_elements.js" type="text/javascript"></script>
    <script src="assets/js/scripts.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL JS -->   
<!-- BEGIN SLIDER DEPENDENCIES -->
    <script type="text/javascript" src="assets/plugins/swiper/js/swiper.jquery.min.js"></script>
    <script type="text/javascript" src="assets/plugins/velocity/velocity.min.js"></script>
    <script type="text/javascript" src="assets/plugins/velocity/velocity.ui.js"></script>
    <!-- END OVERLAY SEARCH -->
    <script src="assets/plugins/pace/pace.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="pages/js/pages.image.loader.js"></script>
    <!-- BEGIN CORE FRAMEWORK -->

    <script src="asset/plugin/jquery/jquery-1.11.1.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- BEGIN RETINA IMAGE LOADER -->
    <script type="text/javascript" src="assets/plugins/jquery-unveil/jquery.unveil.min.js"></script>
    <!-- END VENDOR JS -->
    <!-- BEGIN PAGES FRONTEND LIB -->
    <script type="text/javascript" src="pages/js/pages.frontend.js"></script>
    <!-- END PAGES LIB -->
    <!-- BEGIN YOUR CUSTOM JS -->
    <script type="text/javascript" src="assets/js/custom.js"></script>
    <!-- END PAGES LIB -->

    

    <!-- JS SLIDER -->
    <!-- script src="assets/js-slider/jquery-1.12.3.min.js"></script -->
    <script src="assets/js-slider/ion.rangeSlider.js"></script>
    <script>
        $(function () {
            $("#range").ionRangeSlider({
                hide_min_max: true,
                keyboard: true,
                min: 0,
                max: 5000,
                from: 1000,
                to: 4000,
                type: 'double',
                step: 1,
                prefix: "RM",
                grid: true
            });
        });
    </script>

    <!-- DATE RANGE -->
    <script type="text/javascript" src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>
    <script type="text/javascript">
        $(function() {
            $('input[name="daterange"]').daterangepicker({
                timePicker: true,
                timePickerIncrement: 30,
                locale: {
                    format: 'MM/DD/YYYY h:mm A'
                }
            });
            $('input[name="dateliving"]').daterangepicker({
                locale: {
                    format: 'MM/DD/YYYY'
                }
            });
            $('input[name="dateworking"]').daterangepicker({
                timePicker: true,
                timePickerIncrement: 30,
                locale: {
                    format: 'MM/DD/YYYY h:mm A'
                }
            });

            $('input[name="dateleisure"]').daterangepicker({
                timePicker: true,
                timePickerIncrement: 30,
                locale: {
                    format: 'MM/DD/YYYY h:mm A'
                }
            });

            $('input[name="specialdate"]').daterangepicker({
                timePicker: false,
                timePickerIncrement: 30,
                locale: {
                    format: 'MM/DD'
                }
            });
        });
    </script>

    <!-- wysiwyg summernote -->
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>

    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.js"></script>
    <script>
        $(document).ready(function() {
            $('#reply').summernote({
              toolbar: [
                // [groupName, [list of button]]
                ['style', ['bold', 'italic', 'underline', 'clear']],
                ['fontsize', ['fontsize']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']]
              ]
            });
        });
    </script>

    <!-- price mask -->
    <script src="assets/js/jquery.inputmask.bundle.js"></script>
    <script>
      $('#price').inputmask("numeric", {
        radixPoint: ".",
        groupSeparator: ",",
        digits: 2,
        autoGroup: true,
        prefix: 'RM ', //Space after $, this will not truncate the first character.
        rightAlign: false,
        oncleared: function () { self.Value(''); }
      });  
    </script>


    <!-- file uploader -->
    <script src="asset/plugin/filer-master/js/jquery.filer.min.js"></script>
    <script src="asset/plugin/filer-master/examples/dragdrop/js/custom.js" type="text/javascript"></script>
    <script>
    $(document).ready(function() {
        $('#filer_input').filer();       
    });
    </script>

    <!-- slick carousel -->
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>  
    <script type="text/javascript" charset="utf-8" src="asset/plugin/slick-1.6.0/slick/slick.js"></script>
      <script type="text/javascript">
        $(document).on('ready', function() {
          $(".regular").slick({
            dots: true,
            infinite: true,
            slidesToShow: 4,
            slidesToScroll: 4
          });
        });
      </script>

    <!-- star rating -->
    <script src="asset/plugin/five-star-rating-master/js/dist/rating.min.js"></script>
    <script>
        // target element
        var el = document.querySelector('#el');

        // current rating, or initial rating
        var currentRating = 0;

        // max rating, i.e. number of stars you want
        var maxRating= 5;

        // callback to run after setting the rating
        var callback = function(rating) { alert(rating); };

        // rating instance
        var myRating = rating(el, currentRating, maxRating, callback);
    </script>

    </html>