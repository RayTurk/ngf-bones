<div id="<?php echo get_sub_field('css_id');?>" class="page_section posts_events">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 posts">
                <h2>Recent News</h2>
                <?php 
                    $postargs = array (
                        'posts_per_page' => get_sub_field('number_of_posts'),
                        'category_name'  => get_sub_field('post_category'),
                    );
                ?>
                <?php get_atomic_part('/organisms/hb_postloop.php', $postargs);?>
            </div>
            <div class="col-lg-6 events">
                <h2>Upcoming Events</h2>
                <?php 
                    $eventargs = array (
                        'posts_per_page' => get_sub_field('number_of_events'),
                        'category_name'  => get_sub_field('event_category'),
                    );
                ?>
                <?php get_atomic_part('/organisms/hb_eventloop.php', $eventargs);?>
            </div>
        </div>
    </div>
</div>