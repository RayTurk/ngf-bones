<?php 
    if (!empty($_GET['unzip']) && $_GET['unzip'] == 'yes') {
        
    }
	else {
		ob_start("sanitize_output");
	}
?>
<?php 
    /**
     * Template Name: Sitemap Page
     */
while (have_posts()) {
    the_post();
    $args = array (
        'pageTitle' => get_the_title(),
        'content'   => get_the_content()
    );
    
?>
<?php 

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
        <div id="content">
            <?php get_atomic_part('templates/sitemap-page-content.php', $args);?>
        </div>
        <?php get_atomic_part ('/organisms/footer.php', 0);?>
        <?php get_atomic_part ('/meta/common_footer.php', 0);?>
    </body>
<?php } //endwhile?>    
</html>