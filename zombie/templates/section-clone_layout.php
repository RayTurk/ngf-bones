<?php 
    $page = get_sub_field('page_id');
    $section = get_sub_field('css_field_id');
    //echo 'Page '.$page.', Section '.$section.'<br>';
    
    if( have_rows('page_builder_loop', $page) ):
         // loop through the rows of data
        while ( have_rows('page_builder_loop',$page) ) : the_row();
            $subcss = get_sub_field('css_id');
            $slug = '/templates/section-'.get_row_layout().'.php';
            
            if ($subcss == $section) {
                //only output builder sections for items in our array
                get_atomic_part($slug, $args);
                break;
            }

        endwhile;

    else :

        echo 'not found.';

    endif;
?>