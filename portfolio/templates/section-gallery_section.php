<div id="<?php echo get_sub_field('css_id');?>" class="page_section gallery_section">
    
    <?php
        $gallery = get_sub_field('section_gallery');
        if (!empty($gallery)) {
            echo '<div class="slider">';
            foreach ($gallery as $item) {
    ?>
        <div class="slide">
            <a href="/gallery/">
                <img src="<?php echo $item['sizes']['medium_large'];?>" alt="<?php echo $item['alt'];?>" width="300px" height="300px;">
            </a>
        </div>
    <?php
                
            }
            echo '</div>';
        }
    ?>
</div>