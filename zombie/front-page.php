<?php 
    if (!empty($_GET['unzip']) && $_GET['unzip'] == 'yes') {
        
    }
	else {
		ob_start("sanitize_output");
	}
?>
<?php 
    /**
     * Template for displaying pages
     */
while (have_posts()) {
    the_post();
    $args = array (
        'pageTitle' => get_the_title(),
        'content'   => get_the_content(),
        'hero-image' => wp_get_attachment_url(get_post_thumbnail_id($post->ID)),
        'coming_soon' => get_field('enable_coming_soon','option'),
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
        <?php 
            get_atomic_part ('/meta/common_header.php', 0);
            
        ?>
        
	</head>
    <body <?php body_class(); ?>>
        <?php 
            if ($args['coming_soon'] === true && empty($_GET['ngf_preview'])) {
                
                get_atomic_part('/organisms/cs-header.php', $args);
                echo '<div id="content">';
                get_atomic_part ('templates/cspage.php', $args);
                echo '</div>';
                get_atomic_part ('/organisms/cs-footer.php', 0);  
                get_atomic_part ('/meta/common_footer.php', 0);
            }
            else {
                get_atomic_part('/organisms/header.php', $args);
                echo '<div id="content">';
                get_atomic_part ('/inc/page_builder.php', $args);
                echo '</div>';
                get_atomic_part ('/organisms/footer.php', 0);  
                get_atomic_part ('/meta/common_footer.php', 0);
            }
        ?>
      
    </body>
<?php } //endwhile?>    
</html>