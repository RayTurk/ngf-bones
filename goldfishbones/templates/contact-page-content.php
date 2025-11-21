<div id="default_content_contact">
    <div class="container main-content">
        <?php get_atomic_part ('molecules/page_title.php', $args);?>
        <div class="row">
            <div class="col-sm-12 col-md-6 contact">
                <?php get_atomic_part('/organisms/contact-info.php', $args);?>
            </div>
            <div class="col-sm-12 col-md-6 content">
                <?php echo apply_filters( 'the_content', $args['content']); ?>
            </div>
        </div>
    </div>
</div>