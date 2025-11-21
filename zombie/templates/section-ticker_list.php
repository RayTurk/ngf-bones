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
<div id="<?php echo get_sub_field('css_id');?>" class="page_section ticker_list">
    <div class="container">
        
            <?php
            if (get_sub_field('section_title') != "") {
                echo '<h2>'.get_sub_field('section_title').'</h2>';
            }
            if( have_rows('list_items') ):
                            
                    echo '<div class="list">';

                    // loop through the rows of data
                    while ( have_rows('list_items') ) : the_row();
                            $img = get_sub_field('Feature Image');
                            
                        
                            
                        get_atomic_part ('/molecules/list-item.php', $fields);
                        
                    endwhile;

                    echo '</div>';

                endif;
            ?>
        
    </div>
</div>