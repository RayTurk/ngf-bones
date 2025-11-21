<?php
    //Hero image slider
global $post;
?>
<div id="<?php echo get_sub_field('css_id');?>" class="page_section icon_card <?php echo get_sub_field('additional_classes');?>">
    <div class="container">
            <?php
            if (get_sub_field('section_title') != "") {
                echo '<h2>'.get_sub_field('section_title').'</h2>';
            }
            if( have_rows('card_loop') ):
                    echo '<div class="card_row row">';
                    

                    // loop through the rows of data
                    while ( have_rows('card_loop') ) : the_row();
                            $img = get_sub_field('card_image');
                            
                        
                            
                            $fields = array (
                                'CardTitle'    => get_sub_field('title'),
                                'CardImage'    => $img['url'],
                                'CardLink'     => get_sub_field('card_link'),
                                'CardImageAlt' => $img['alt'],
                            );
                            get_atomic_part ('/organisms/icon-card.php', $fields);
                    
                    endwhile;
                    echo '</div>';
                    

                endif;
            ?>
    </div>

</div>
