<?php 
    global $post;
    $layout = get_sub_field('layout');
    
?>

<div id="<?php echo get_sub_field('css_id');?>" class="page_section block_features" style="background-image: url(<?php echo get_sub_field('background_image');?>)">
    <div class="container">
        
            <?php
            if (get_sub_field('section_title') != "") {
                echo '<h2>'.get_sub_field('section_title').'</h2>';
            }
            if( have_rows('feature_loop') ):
                            
                    echo '<div class="row justify-content-center">';

                    // loop through the rows of data
                    while ( have_rows('feature_loop') ) : the_row();
                            $img = get_sub_field('Feature Image');
                            
                            
                            
                            $fields = array (
                                'BlockTitle'    => get_sub_field('feature_name'),
                            
                                'BlockContent'  => get_sub_field('feature_text'),
                                'ButtonText'    => get_sub_field('feature_button_text'),
                                'FeatureLink'  => get_sub_field('feature_link'),
                                    
                            );
                            if (!empty($img)) {
                                $fields['BlockImage'] = $img['url'];
                                $fields['BlockImageAlt'] = $img['alt'];
                            }
                            if ($layout != "") {
                                get_atomic_part ('/organisms/block-feature_'.$layout.'.php', $fields);
                            }
                            else {
                                get_atomic_part ('/organisms/block-feature.php', $fields);    
                            }
                            
                        
                    endwhile;

                    echo '</div>';

                endif;
            ?>
        
    </div>
</div>