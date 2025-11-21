<div id="<?php echo get_sub_field('css_id') ;?>" class="page_section section_content_cta <?php echo get_sub_field('classes');?>"> 
    <div class="container">
        <?php
            if( have_rows('slider') ):

                    echo '<div class="slider">';

                    // loop through the rows of data
                    while ( have_rows('slider') ) : the_row();
                        echo'<div class="slide">';
                        the_sub_field('slide');
                        echo '</div>';

                    endwhile;

                    echo '</div>';

                endif;
        ?>
        <div class="cta">
            <?php the_sub_field('cta_section');?>
        </div>
    </div>
</div>