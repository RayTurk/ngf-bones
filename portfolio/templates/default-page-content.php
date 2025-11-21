<div id="default_content">
    <?php get_atomic_part ('molecules/page_title.php', $args);?>
    <div class="container main-content">
        <?php echo apply_filters( 'the_content', $args['content']); ?>
    </div>
    <?php 
        get_atomic_part ('/inc/page_builder.php', $args);
        $front_page_id = get_option('page_on_front');
        clone_layout ($front_page_id, 'cta_duo2');
        clone_layout ($front_page_id, 'home_assoc');
        
    ?>
    
</div>