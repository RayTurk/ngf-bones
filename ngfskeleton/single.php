<?php
/**
 * Template for dispalying single post (read full post page).
 * 
 * @package bootstrap-basic
 */

get_header();?>

<div id="content" class="site-content">
    <div class="container main-content">
        <div class="row">
            <div class="col-md-8 sm-12- xs-12" id="primary">

                    <?php 
                    while (have_posts()) {
                        the_post();

                        get_template_part('content','single');



                    } //endwhile;
                    ?> 

            </div>
    
            <div class="col-md-4 hidden-xs hidden-sm">

                <?php get_sidebar('blog');?>

            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?> 