<script
  src="https://code.jquery.com/jquery-3.7.1.min.js"
  integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
  crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri();?>/js/ngf2024.js"></script>

<script type="text/javascript">
    
    $(document).ready(function(){
        $('.togglesearch').click(function(e){
            e.preventDefault();
            $('#searchbox').toggleClass('open');
        });
        $('#testimonial_carousel .slider').bxSlider({
            auto:true,
            controls:true,
            pager:false,
            
        });
        $('#home_gallery .slider').bxSlider({
            auto:true,
            controls:true,
            pager:false,
            minSlides:1,
            maxSlides:20,
            moveSlides:1,
            slideWidth:300,
        });
        $('#media_gallery .large-image').bxSlider({
            auto:false,
            controls:true,  
            pagerCustom: '#product_thumbs',

        });
    })
    
</script>

<!--wordpress footer-->
<?php wp_footer(); ?> 