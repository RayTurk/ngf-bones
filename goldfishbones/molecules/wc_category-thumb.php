<?php 
    $cat = $vars;
    $thumbnail_id = get_term_meta( $cat->term_id, 'thumbnail_id', 'true' );
    if (!empty($thumbnail_id)) {
        $image = wp_get_attachment_image_src ( $thumbnail_id, 'medium' );    
    }
    else {
        $image = array ();
        $image[0] = get_stylesheet_directory_uri().'/img/logo.png';
    }
    $cat_link = get_term_link($cat->term_id);
?>
<div class="category">
    <a href="<?php echo $cat_link;?>">
        <img src="<?php echo $image[0];?>" alt="<?php echo $cat->description;?>">
        <h4><?php echo $cat->name;?></h4>
        <?php echo $cat->description;?>
    </a>
</div>
