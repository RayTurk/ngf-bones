<div id="sidebar_cats">
    
        
        <nav class="navbar navbar-toggleable-sm">
            <h2>
                Categories
                <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbar_side" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="sr-only">Expand Categories</span>
                </button>
            </h2>
            
            <div class="collapse navbar-collapse" id="navbar_side">
                <ul class="navbar-nav">
                    <?php
                
                    $taxonomy     = 'product_cat';
                    $orderby      = 'menu_order';  
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
                         'child_of'     => 0,
                         'parent'       => 0,
                    );
                    $all_categories = get_categories( $args );

                    foreach ($all_categories as $cat) {
                        $cid = $cat->term_id;
                        $cat_options = get_field('cat_options', 'product_cat_'.$cid);
                    
                        if (empty($cat_options) || !in_array('sidebar', $cat_options)) {
                            $thisChild = get_term( $child, 'product_cat'); 
                            $taxonomy     = 'product_cat';
                            $orderby      = 'menu_order';  
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
                                 'child_of'     => $cid,
                                 'parent'       => $cid
                            );
                            $children = get_categories( $args );
                            if (!empty($children)) {
                                //var_dump ($children);

                                echo '<li class="dropdown"><a class="dropdown-toggle" href="'.get_term_link($cat->term_id).'">'.$cat->name.'</a><ul class="dropdown-menu depth_1"><li><a href="'.get_term_link($cat->term_id).'">View All '.$cat->name.'</a></li>';
                                foreach ($children as $child) {
                                    $thisChild = get_term( $child, 'product_cat'); 
                                    $taxonomy     = 'product_cat';
                                    $orderby      = 'menu_order';  
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
                                         'child_of'     => $thisChild->term_id,
                                         'parent'       => $thisChild->term_id,
                                    );
                                    
                                    $subchildren = get_categories( $args );
                                    if (!empty($subchildren)) {
                                        

                                        echo '<li class="dropdown"><a class="dropdown-toggle" href="'.get_term_link($thisChild->term_id).'">'.$thisChild->name.'</a><ul class="dropdown-menu depth_1"><li><a href="'.get_term_link($thisChild->term_id).'">View All '.$thisChild->name.'</a></li>';
                                        foreach ($subchildren as $subchild) {
                                            $thisSubchild = get_term( $subchild, 'product_cat'); 
                                            echo '<li><a href="'.get_term_link($thisSubchild->term_id).'">'.$thisSubchild->name.'</a></li>';
                                        }
                                        echo '</li></ul>';

                                    }
                                    else {
                                        echo '<li><a href="'.get_term_link($thisChild->term_id).'">'.$thisChild->name.'</a></li>';
                                    }
                                }
                                echo '</li></ul>';

                            }
                            else {
                                echo '<li><a href="'.get_term_link($cat->term_id).'">'.$cat->name.'</a></li>';
                            }
                        }
                     }
            ?>
                </ul>  
            </div>

        </nav>
    
</div>
