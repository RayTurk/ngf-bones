
<div class="container main-content">
    
    <div class="row justify-content-center">
        <div class="col-md-9">
            
            <p><strong><?php the_field('course_prefix');?>, <?php the_title();?></strong></p>
            <?php echo apply_filters( 'the_content', $args['content']); ?>
            <p><?php the_field('hours');?> Clock Hours / <?php the_field('credits');?> Qtr. Credit Hours.</p>
            <p>
                Prerequisite: 
                <?php 
                    if (get_field ('prerequisites') !="") {
                        the_field('prerequisites');
                    }
                    else {
                        echo 'None';
                    }
                ?>
            </p>
        </div>
        <div class="col-md-3">
            <?php get_sidebar('page');?>
        </div>
    </div>
</div>