<?php
/**
 * Template for displaying pages
 * 
 * @package bootstrap-basic
 */

get_header();

/**
 * determine main column size from actived sidebar
 */
?> 
<div id="content">
    <?php get_template_part('/inc/rotator');?>
    <?php get_template_part('/inc/features');?>
</div>
<?php get_footer(); ?> 