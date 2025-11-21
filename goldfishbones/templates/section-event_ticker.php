
<div id="<?php echo get_sub_field('css_id');?>" class="page_section event_ticker"> 
    <div class="ticker-wrap">
        <div class="ticker">
            <?php 
                $term = get_sub_field('event_category');
                $number = get_sub_field('number_of_events');
                $events = tribe_get_events( array(
                    'start_date'     => date( 'Y-m-d H:i:s'),
                    'eventDisplay'   => 'custom',
                    'posts_per_page' => $number,
                    'tax_query' => array(

                        array(
                            'taxonomy'         => 'tribe_events_cat',
                            'terms'            => $term,
                            'field'            => 'name',
                        ),
                    ),
                ));
                if ($events !="") {
                    foreach ($events as $event) {
                        $old_date_timestamp = strtotime($event->EventStartDate);
                        get_atomic_part ('/molecules/ticker-event.php', $event);
                    }
                }
                else {
                    echo "No Events Currently Scheduled";
                }
            ?>
        </div>
    </div>
</div>