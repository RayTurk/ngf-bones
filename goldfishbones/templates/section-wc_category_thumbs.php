<div id="<?php echo get_sub_field('css_id') ;?>" class="page_section wc_category_thumbs"> 
    <div class="container">
        <?php

                      $taxonomy     = 'product_cat';
          $orderby      = 'menu_order';  
          $show_count   = 0;      // 1 for yes, 0 for no
          $pad_counts   = 0;      // 1 for yes, 0 for no
          $hierarchical = 1;      // 1 for yes, 0 for no  
          $title        = '';  
          $empty        = 0;
          $child        = get_sub_field('parent_of');

          $args = array(
                 'taxonomy'     => $taxonomy,
                 'orderby'      => $orderby,
                 'show_count'   => $show_count,
                 'pad_counts'   => $pad_counts,
                 'hierarchical' => $hierarchical,
                 'title_li'     => $title,
                 'hide_empty'   => $empty,
                 'child_of'     => $child,
          );
          get_atomic_part('/organisms/wc_category_loop-thumb.php', $args);
        ?>
        
    </div>
</div>