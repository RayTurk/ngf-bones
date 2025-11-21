<?php
    $fixme = wp_get_attachment_image_src($vars['id']);
    
?>

    <a class="item" href="<?php echo wp_get_attachment_url($vars['id']);?>">
        <span style="background-image:url(<?php echo $fixme[0];?>);">
            <i class="sr-only">Pager item <?php echo $vars['count'];?></i>
        </span>
    </a>

