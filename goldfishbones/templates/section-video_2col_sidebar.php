<?php //Dual Column Text?>

<div id="<?php echo get_sub_field('css_id');?>" class="page_section dual_column_text"> 
    <div class="container">
        <div class="row">
            <div class="col-lg-3 left">
                <?php 
                    $sidebar= get_sub_field('sidebar_slug');
                    get_sidebar($sidebar);
                ?>
            </div>
            <div class="col-lg-9 right">
                <?php 
                    $video = array (
                        'embed' => get_sub_field('video_embed_code')
                    );
                    get_atomic_part('/molecules/responsive-video.php', $video);
                ?>
                <div class="row justify-content-center">
                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                        <div class="content left-content">
                            <?php echo get_sub_field('left_content_area');?>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                        <div class="content right-content">
                            <?php echo get_sub_field('right_content_area');?>
                        </div> 
                    </div>
                </div>
            </div>
            
      </div>
   </div>
</div>