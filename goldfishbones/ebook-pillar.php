
<?php 
    if ($_GET['unzip'] != 'yes') {
        ob_start("sanitize_output");
    }
;?>
<?php 
    /**
     * Template Name: E-book Pillar Pages
     */
while (have_posts()) {
    the_post();
    $args = array (
        'pageTitle' => get_the_title(),
        'content'   => get_the_content()
    );
    
?>
<?php 
global $post
?>
<!DOCTYPE html>

<!--[if lt IE 7]>  <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>     <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>     <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
	<head>
        <?php get_atomic_part ('/meta/common_header.php', 0);?>
	</head>
    <body <?php body_class(); ?>>
        <?php get_atomic_part('/organisms/header.php', $args);?>
        <div id="content" class="ebook ebook_<?php echo $post->ID;?>">
            <div class="ebook_title">
                <div class="container">
                    <h1><?php the_title();?></h1>
                    <p><?php the_field('hero_tagline');?></p>
                </div>
            </div>
            <div class="download offer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <?php the_content();?>
                        </div>
                        <div class="col-md-4">
                            <?php the_field('download_form');?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="toc_title">
                <div class="container">
                    <h2>Table of Contents</h2>
                </div>
            </div>
            <div class="toc" id="ebook_toc">
                <div class="container">
                    
                    <?php
                        if( have_rows('chapters') ):        
                            echo '<ol>';
                            while ( have_rows('chapters') ) : the_row();
                    ?>
                                <li><a href="<?php echo get_sub_field('starting_id');?>"><?php the_sub_field('chapter_name');?></a></li>

                    <?php
                            endwhile;
                            echo '</ol>';
                        endif;
                    ?>
                </div>
            </div>
            <?php get_atomic_part ('/inc/page_builder.php', $args);?>
        </div>
        <?php get_atomic_part ('/organisms/footer.php', 0);?>
        <?php get_atomic_part ('/meta/common_footer.php', 0);?>
    </body>
<?php } //endwhile?>    
</html>