<div id="default_content_sidebar">
    <?php get_atomic_part ('molecules/page_title.php', $args);?>
    <div class="container main-content">
        <div class="row">
            <div class="col-sm-12 col-lg-9 main">
                <?php 
                if ($args['content'] !="") {
                    echo apply_filters( 'the_content', $args['content']); 
                }
                get_atomic_part ('/inc/page_builder.php', $args);
                ?>
            </div>
            <div class="col-lg-3 sidebar">
                <?php get_sidebar('page');?>
            </div>
        </div>
    </div>
</div>