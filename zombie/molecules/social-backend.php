<?php
    $socials = get_field('social_networks', 'option');
    if (!empty($socials)) {
        echo '<div class="social">';
        //var_dump($socials);
        foreach ($socials as $item) {
?>
    <a href="<?php echo $item['url'];?>">
        <span class="sr-only"><?php echo $item['name'];?></span>
        <?php echo $item['svg'];?>
    </a>
<?php 
        }
        echo '</div>';
    }
    
?>