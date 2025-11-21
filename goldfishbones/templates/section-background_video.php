<?php //Single Column Text
    global $post;
?>
<style>
    .background_video .video_container {
        position: relative;
        background-repeat: no-repeat;
        background-size: cover;
    }
    .background_video video {
        display: block;
        width: 100%;
    }
</style>
    <div id="<?php echo get_sub_field('css_id') ;?>" class="page_section background_video"> 
        <div class="video_container" style="background-image:url(<?php echo get_sub_field('fallback_image');?>)">
            <video playsinline autoplay muted loop poster="<?php echo get_sub_field('fallback_image');?>">
                <source src="<?php echo get_sub_field('video_url');?>.mp4" type="video/mp4">
                <source src="<?php echo get_sub_field('video_url');?>.webm" type="video/webm">
                <source src="<?php echo get_sub_field('video_url');?>.ogv" type="video/ogg">
            </video>
            <?php 
                $theargs = array (
                    'overlay'   => get_sub_field('video_overlay')
                );
                if ($theargs['overlay'] != "") {
                    get_atomic_part('organisms/video_overlay.php', $theargs);
                }
            ?>
        </div>
        <script type="text/javascript">
            if (window.matchMedia("(min-width: 768px)").matches) {
               var sources = document.querySelectorAll('video#my-id source');
                
                var video = document.querySelector('video#my-id');
                for(var i = 0; i<sources.length;i++) {
                  sources[i].setAttribute('src', sources[i].getAttribute('data-src'));
                }
                
                video.load();
            } else {
               
            }
        </script>
	</div>