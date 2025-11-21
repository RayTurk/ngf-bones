<div id="default_content">
    <?php get_atomic_part ('molecules/page_title.php', $args);?>
    <div class="container main-content">
        
        <div class="row content-row justify-content-center">

            <div class="col-sm-12 main">
                <h1><?php the_title();?></h1>
                <?php echo apply_filters( 'the_content', $args['content']); ?>
            </div>

        </div>
    </div>
</div>
<?php get_atomic_part ('/inc/page_builder.php', $args);?>