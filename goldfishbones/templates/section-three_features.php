<?php 
    global $post;
   
    
?>
<style>
     .featured-img  {
         margin:0 0 .5em 0;
     }
     @media (min-width: 0px) {
         .three_feature .block_feature {
             margin-bottom:3.5em;
         }
         .three_feature .block_feature:last-child {
             margin-bottom:0;
         }
     }
     @media (min-width: 768px) {
         .three_feature .block_feature {
             margin-bottom:0;
         }
     }
 </style>
<div id="<?php echo get_sub_field('css_id');?>" class="page_section three_feature" style="background-image: url(<?php echo get_sub_field('background_image');?>)">
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
                            
                        echo '<div class="col-md-4">';
                            
                            $fields = array (
                                'BlockTitle'    => get_sub_field('feature_name'),
                                'BlockImage'    => $img['url'],
                                'BlockImageAlt' => $img['alt'],
                                'BlockContent'  => get_sub_field('feature_text'),
                                'ButtonText'    => get_sub_field('feature_button_text'),
                                'FeatureLink'  => get_sub_field('feature_link'),
                                
                            );
                            get_atomic_part ('/organisms/block-feature.php', $fields);
                        echo '</div>';
                    endwhile;

                    echo '</div>';

                endif;
            ?>
        
    </div>
</div>