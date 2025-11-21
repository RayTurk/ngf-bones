<?php
    //Hero image slider
global $post;
?>
<style>
    .slide {
        min-height: 200px;
        position: relative;
        background-size:cover;
        background-position: center
    }
    .caption {
        position: absolute;
        width:100%;
    }
    .hero_image_single {
        position: relative;
    }
</style>
<div id="<?php echo get_sub_field('css_id');?>" class="page_section hero_image_single">
    <?php
            
    
        $fields = array (
            'BlockTitle'        => get_sub_field('feature_name'),
            'SlideTitle'        => get_sub_field('slide_title'),
            'BackgroundImage'   => get_sub_field('background_image'),
            'SlideContent'      => get_sub_field('slide_content'),

        );
        get_atomic_part ('/organisms/image_slide.php', $fields);
            
    ?>

</div>
