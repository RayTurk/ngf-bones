<?php 
    $events = tribe_get_events( array(
        'start_date'     => date( 'Y-m-d H:i:s'),
        'eventDisplay'   => 'custom',
        'posts_per_page'         => $vars['posts_per_page'],
        'category_name'          => $vars['category_name']
    ));
    if ($events !="") {
        foreach ($events as $event) {
            $old_date_timestamp = strtotime($event->EventStartDate);
            get_atomic_part ('/molecules/tribe_event.php', $event);
        }
    }
    else {
        echo "No Events Currently Scheduled";
    }
?>