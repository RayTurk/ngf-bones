<?php 
    if (!empty($_GET['unzip']) && $_GET['unzip'] != 'yes') {
        ob_start("sanitize_output");
    }
;?>
<?php 
    $args = array (
        'pageTitle' => 'Testimonials',
    );
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

            <?php get_atomic_part ('/templates/feed_testimonials.php', $args);?>

        </div>
        <?php get_atomic_part ('/organisms/footer.php', 0);?>
        <?php get_atomic_part ('/meta/common_footer.php', 0);?>
    </body>
</html>