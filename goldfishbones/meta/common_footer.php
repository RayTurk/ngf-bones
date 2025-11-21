<script src="//ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri();?>/js/unified_theme.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('.cartlink').click(function(){
            $('.minicart').slideToggle();

        });
        $('.hero_slider').bxSlider({
            auto:true,
            controls:true,  
        });
    })
</script>

<!--wordpress footer-->
<?php wp_footer(); ?> 