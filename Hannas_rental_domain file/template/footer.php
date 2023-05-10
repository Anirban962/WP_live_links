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
        <?php echo do_shortcode('[gravityform id="2" title="false" description="false" ajax="false"]');?>      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
        <!-- get a quote end -->

        
 <script src="<?php echo bloginfo('template_directory');?>/js/jquery-2.2.4.min.js"></script>
    <script src="<?php echo bloginfo('template_directory');?>/js/bootstrap.min.js"></script>  
    <script src="<?php echo bloginfo('template_directory');?>/js/swiper.jquery.min.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.4/swiper-bundle.min.js"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.2.0/js/swiper.min.js"></script> -->
    
    <script src="<?php echo bloginfo('template_directory');?>/js/global.js"></script>

    <!-- lightbox -->
    <link href="<?php echo bloginfo('template_directory');?>/css/simplelightbox.css" rel="stylesheet" type="text/css" />
    <script src="<?php echo bloginfo('template_directory');?>/js/simple-lightbox.min.js"></script>

     <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js" >
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