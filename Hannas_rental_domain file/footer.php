<div id="content-block">
        <!-- FOOTER -->
        <footer>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 col-xs-text-center col-md-text-left">
                        <div class="copyright sa small">&copy; <?php the_field('footer_copyright', 'option'); ?>.</div>  
                        <div class="col-xs-b15 visible-xs visible-sm"></div>
                    </div>
                    <div class="col-md-6 col-xs-text-center col-md-text-right">
                        <div class="follow style-1">
                            <a class="entry" href="<?php the_field('footer_instagram', 'option'); ?>" target="_blank"><i class="fa fa-instagram"></i></a>
                            <a class="entry" href="<?php the_field('footer_facebook', 'option'); ?>" target="_blank"><i class="fa fa-facebook"></i></a>
                            <a class="entry" href="<?php the_field('footer_twitter', 'option'); ?>" target="_blank"><i class="fa fa-twitter"></i></a>
                         <!--    <a class="entry" href="https://plus.google.com/" target="_blank"><i class="fa fa-google-plus"></i></a> -->
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        
</div>
<!-- get a quote strat-->
        <!-- Trigger the modal with a button -->
<div class="quote-wrap"><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal" id="quote-btn">Get a quote</button></div>     

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog" style="padding-right: 0!important;">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Get a Quote</h4>
      </div>
      <div class="modal-body">
        <?php echo do_shortcode('[gravityform id="2" title="false" description="false" ajax="true"]');?>      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
        <!-- get a quote end -->

    <div class="phone-marker visible-xs"></div><div class="tablet-marker visible-sm"></div>

    <script src="<?php echo bloginfo('template_directory');?>/js/jquery-2.2.4.min.js"></script>  
    <script src="<?php echo bloginfo('template_directory');?>/js/bootstrap.min.js"></script>           
    <script src="<?php echo bloginfo('template_directory');?>/js/swiper.jquery.min.js"></script>
    <script src="<?php echo bloginfo('template_directory');?>/js/global.js"></script>  

    <script src="<?php echo bloginfo('template_directory');?>/js/isotope.pkgd.min.js"></script>

    <!-- lightbox -->
    <link href="<?php echo bloginfo('template_directory');?>/css/simplelightbox.css" rel="stylesheet" type="text/css" />
    <script src="<?php echo bloginfo('template_directory');?>/js/simple-lightbox.min.js"></script>
        <!-- MAP -->
   <!--  <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script src="<?php echo bloginfo('template_directory');?>/js/map.js"></script> -->

    <!-- CONTACT -->
    <!-- <script src="<?php echo bloginfo('template_directory');?>/js/contact.form.js"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js" >
    </script>
    <script>
        $(document).ready(function() {
          
            $(function() {
                $( "#input_1_9" ).datepicker();
            });
        })
    </script>
    <script>
        $(document).ready(function() {
          
            $(function() {
                $( "#input_2_9" ).datepicker();
            });
        })
    </script>

<?php wp_footer(); ?>

</body>
</html>


  
