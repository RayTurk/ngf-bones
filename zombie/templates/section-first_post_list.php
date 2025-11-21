<?php //Single Column Text
    global $post;
?>
    <div id="<?php echo get_sub_field('css_id') ;?>" class="page_section single_column_text"> 
		<div class="container">
		    <div class="row">
                <div class="col-md-8 col-lg-6 left_col">
                    <?php get_atomic_part('organisms/fp_query_post.php', $args);?>
                </div>
                <div class="col-md-4 col-lg-6 right_col">
                    <?php get_atomic_part('organisms/fp_query_list.php', $args);?>
                </div>
		          
		    </div>
		</div>
	</div>