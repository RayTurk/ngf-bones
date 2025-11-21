<div class="contact-info row">
    <div class="section col-sm-12 schema">
        <?php get_atomic_part('/molecules/schema-localbusiness.php', 0);?>
    </div>
    <div class="section col-sm-12 map">
        <?php 
            global $post;
            $map = array (
                'Map URL' => get_field('map_url'),
                'Map Image' => get_field ('image')
            );
        ?>
         <?php get_atomic_part('/molecules/google-map.php', $map);?>
    </div>
</div> 