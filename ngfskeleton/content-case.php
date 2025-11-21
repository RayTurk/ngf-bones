<article class="case-study">
    <h1>Case Study: <?php the_title();?></h1>
    <div class="caseinfo">
        <p><b><?php the_title();?></b></p>
        <p><b><?php echo cfs()->get('location');?></b></p>
        <p><b>Work Performed</b> <?php echo cfs()->get('work_performed');?></p>
        <p><a href="<?php cfs()->get('website_address');?>"><?php cfs()->get('website_address');?></a></p>
    </div>
    <?php the_content();?>
    <div class="row">
        <div class="col-sm-2 hidden-xs">
            <?php $testImg = cfs()->get('testimonial_photo');
                  
                if ($testImg != '') {
                    echo '<img src="'.$testImg.'" alt="Testimonial Avatar">';
                } ?>
        </div>
        <div class="col-xs-12 col-sm-10">
            <div class="testimonial-content">
                <?php echo cfs()->get('testimonial');?>
            </div>
            <p><b><?php echo cfs()->get('testimonial_name').' '; echo cfs()->get('testimonial_title') ?></b></p>
        </div>
    </div>
</article><!-- #post -->