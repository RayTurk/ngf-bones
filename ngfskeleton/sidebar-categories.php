<div id="category_navigation" class="navbar navbar-default" role="navigation">
    
    <div class="">
        <h2 class="wc-section-label"> Categories
        <button type="button" class="navbar-toggle left" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="fa fa-plus-circle"></span>
          </button>

        </h2>
      
    </div>

    <div class="navbar-collapse collapse">
        
        <?php

          $taxonomy     = 'product_cat';
          $orderby      = 'name';  
          $show_count   = 0;      // 1 for yes, 0 for no
          $pad_counts   = 0;      // 1 for yes, 0 for no
          $hierarchical = 1;      // 1 for yes, 0 for no  
          $title        = '';  
          $empty        = 1;

          $args = array(
                 'taxonomy'     => $taxonomy,
                 'orderby'      => $orderby,
                 'show_count'   => $show_count,
                 'pad_counts'   => $pad_counts,
                 'hierarchical' => $hierarchical,
                 'title_li'     => $title,
                 'hide_empty'   => $empty
          );
         $all_categories = get_categories( $args );
         echo '<ul class="nav">';
         foreach ($all_categories as $cat) {
            if($cat->category_parent == 0) {
                $category_id = $cat->term_id;       
                

                $args2 = array(
                        'taxonomy'     => $taxonomy,
                        'child_of'     => 0,
                        'parent'       => $category_id,
                        'orderby'      => $orderby,
                        'show_count'   => $show_count,
                        'pad_counts'   => $pad_counts,
                        'hierarchical' => $hierarchical,
                        'title_li'     => $title,
                        'hide_empty'   => $empty
                );
                $sub_cats = get_categories( $args2 );
                if($sub_cats) {
                    echo '<li><a href="#" class="dropdown-toggle" data-toggle="dropdown">'. $cat->name .'<span class="fa fa-angle-double-right"><span></a>';
                    echo '<ul class="dropdown-menu category-dropdown">';
                    echo '<li class="dropdown"><a href="'. get_term_link($cat->slug, 'product_cat') .'">All '.$cat->name .'</a>';
                    foreach($sub_cats as $sub_category) {
                        echo  '<li><a href="/product-category/'.$sub_category->slug.'">'.$sub_category->name.'</a></li>';
                    }   
                    echo '</ul>';
                }
                else {
                    echo '<li><a href="'. get_term_link($cat->slug, 'product_cat') .'">'. $cat->name .'</a>';
                }
                echo '</li>';
            }       
        }
        echo '</ul>';
        ?>
    </div>
</div>