<?php //Single Column Text
    global $post;
?>
    <div id="<?php echo get_sub_field('css_id') ;?>" class="page_section single_column_text <?php echo get_sub_field('classes');?>"> 
		<div class="container">
		    <div class="row justify-content-center">
		    	<div class="col-sm-12 col-md-8">
		    		<?php
                        $content_choice = get_sub_field('defaultcontent');
                        if ($content_choice[0] == "Yes") {
                            the_content();
                        }
                        else {
                            echo get_sub_field('content_area');
                        }
                    ?>
		    	</div>
		    </div>
		</div>
	</div> 