<?php 
    if ($_GET['unzip'] != 'yes') {
        ob_start("sanitize_output");
    }
;?>
<?php 
    $args = array (
        'pageTitle' => 'Not Found',
        'content' =>"<h2>We can't seem to find the page you're looking for.</h2><p><em>Error code:404</em></p>"
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
            <?php get_atomic_part('templates/default-page-content.php', $args);?>
        </div>
        <?php get_atomic_part ('/organisms/footer.php', 0);?>
        <?php get_atomic_part ('/meta/common_footer.php', 0);?>
    </body>
</html>