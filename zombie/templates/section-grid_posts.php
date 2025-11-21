 <div id="<?php echo get_sub_field('css_id');?>" class="page_section posts_three_up"> 
    
        <?php
            if (get_sub_field('title') != "") {
                echo '<div class="container"><h2>'.get_sub_field('title').'</h2></div>';
            }
            // WP_Query arguments
                $args = array();
                
                if (get_sub_field('order')) {
                    $args['order'] = get_sub_field('order');
                }
                if (get_sub_field('number_of_posts')) {
                    $args['posts_per_page'] = get_sub_field('number_of_posts');
                }
                if (get_sub_field('post_type')) {
                    $args['post_type'] = get_sub_field('post_type');
                }
                if (get_sub_field('order_by')) {
                    $args['orderby'] = get_sub_field('order_by');
                }
                
                $layout = get_sub_field('layout');
                if ($layout != "") {
                    get_atomic_part('/organisms/loop-grid_'.$layout.'.php', $args);
                }
                else {
                    get_atomic_part('/organisms/loop-grid.php', $args);
                }
                
                        
        ?>
        
        
    
</div>