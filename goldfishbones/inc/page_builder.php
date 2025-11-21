<?php
echo 'debug';
if (!post_password_required()) {
// check if the flexible content field has rows of data
if( have_rows('page_builder_loop') ):

     // loop through the rows of data
    while ( have_rows('page_builder_loop') ) : the_row();
        $slug = '/templates/section-'.get_row_layout().'.php';
        get_atomic_part($slug, $args);

    endwhile;

else :

    // no layouts found

endif;
}
?>