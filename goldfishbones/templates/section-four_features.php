<style>
     .featured-img  {
         margin:0 0 .5em 0;
     }
     @media (min-width: 0px) {
         .four_features .block-feature {
             margin-bottom:3.5em;
         }
         .four_features .feature_container:last-child .block-feature {
             margin-bottom:0;
         }
     }
     @media (min-width: 768px) {

         .four_features .feature_container:last-child .block-feature {
             margin-bottom:0;
         }
         .four_features .feature_container:nth-last-child(2) .block-feature {
             margin-bottom:0;
         }
     }
     @media (min-width: 992px) {
         .four_features .block_feature {
             margin-bottom:0;
         }
     }
 </style>
 <div id="<?php echo get_sub_field('css_id');?>" class="page_section four_features <?php echo get_sub_field('classes');?>" style="background-image: url(<?php echo get_sub_field('background_image');?>)"> 
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

                        echo '<div class="col-xs-12 col-md-6 col-lg-3 feature_container">';

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
