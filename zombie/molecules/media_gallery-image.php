<?php
    $image = (wp_get_attachment_image_src($vars, 'full'));
    $image_alt = get_post_meta( $vars, '_wp_attachment_image_alt', true);
    
    
?>
<a class="item featured" href="<?php echo wp_get_attachment_url($vars);?>"><img src="<?php echo $image[0];?>" alt="<?php echo $image_alt;?>"></a>
