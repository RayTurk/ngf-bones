<?php //Dual Column Text?>

    <div id="<?php echo get_sub_field('css_id');?>" class="page_section dual_column_text <?php echo get_sub_field('classes');?>"> 
		<div class="container">
            <?php if (get_sub_field('headline') != "") {
                echo '<h2>'.get_sub_field('headline').'</h2>';
            }?>
		    <div class="row justify-content-center">
		    	<div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 left-content">
		    		<div class="content">
                        <?php echo apply_filters('the_content', get_sub_field('left_content')); ?>
                    </div>
		    	</div>
		    	<div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 right-content">
		    		<div class="content">
                        <?php echo apply_filters('the_content', get_sub_field('right_content')); ?>
                    </div>
		    	</div>
		    </div>
		</div>
	</div>