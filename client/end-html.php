


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
    <!-- BEGIN TEXT ROTATOR -->
    <script type="text/javascript" src="assets/plugins/text-rotate/jquery.simple-text-rotator.min.js"></script>
    <!-- END VENDOR JS -->
    <!-- BEGIN PAGES FRONTEND LIB -->
    <script type="text/javascript" src="pages/js/pages.frontend.js"></script>
    <!-- END PAGES LIB -->
    <!-- BEGIN YOUR CUSTOM JS -->
    <script type="text/javascript" src="assets/js/custom.js"></script>
    <!-- END PAGES LIB -->

    <!-- CALENDAR -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
      $( function() {
        $( "#from1" ).datepicker();
        $( "#to1" ).datepicker();
        $( "#from2" ).datepicker();
        $( "#to2" ).datepicker();
        $( "#from3" ).datepicker();
        $( "#to3" ).datepicker();
        $( "#from-result" ).datepicker();
        $( "#to-result" ).datepicker();
      } );
    </script>

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
        });
    </script>

    <!-- wysiwyg summernote 
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet"> -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js"></script> 
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>

    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.js"></script>
    <script>
        $(document).ready(function() {
            $('#reply').summernote({
              toolbar: [
                // [groupName, [list of button]]
                ['style', ['bold', 'italic', 'underline', 'clear']],
                ['font', ['strikethrough', 'superscript', 'subscript']],
                ['fontsize', ['fontsize']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['height', ['height']]
              ]
            });
        });
    </script>

    </html>