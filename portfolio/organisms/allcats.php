<?php
                
    $taxonomy     = 'category';
    $orderby      = 'title';  
    $show_count   = 0;      // 1 for yes, 0 for no
    $pad_counts   = 0;      // 1 for yes, 0 for no
    $hierarchical = 0;      // 1 for yes, 0 for no  
    $title        = '';  
    $empty        = 0;
    $args = array(
         'taxonomy'     => $taxonomy,
         'orderby'      => $orderby,
         'show_count'   => $show_count,
         'pad_counts'   => $pad_counts,
         'hierarchical' => $hierarchical,
         'title_li'     => $title,
         'hide_empty'   => $empty,
    );
    $all_categories = get_categories( $args );
    $class="";
    if(!empty($all_categories)) {
        echo '<div id="allcats" class="row"><div class="col col_header"><h2>Categories: </h2></div><nav class="col col_nav">';
        if (is_home()) { $class= 'active';}
        echo '<a href="'.get_permalink( get_option( 'page_for_posts' ) ).'" class="'.$class.'">All</a>';
        $class="";
        foreach ($all_categories as $cat) {
            $class="no";
            if (is_category($cat->term_id)) { $class="active";}
            echo '<a class="'.$class.'"href="'.get_term_link($cat->term_id).'">'.$cat->name.'</a>';
        }
        echo '</nav></div>';
    }
    ?>