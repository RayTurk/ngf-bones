<?php 
    global $post;
   
    
?>

<div id="<?php echo get_sub_field('css_id');?>" class="page_section content_grid <?php echo get_sub_field('classes');?>">
    <div class="container">
        
            <?php
            if (get_sub_field('headline') != "") {
                echo '<h2>'.get_sub_field('headline').'</h2>';
            }
            if( have_rows('grid_sections') ):
                            
                    echo '<div class="row">';

                    // loop through the rows of data
                    while ( have_rows('grid_sections') ) : the_row();
                        $content = get_sub_field('section_content');
                        get_atomic_part('/organisms/grid-content.php', $content);
                    endwhile;

                    echo '</div>';

                endif;
            ?>
        
    </div>
</div>