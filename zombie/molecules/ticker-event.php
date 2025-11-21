<?php
$old_date_timestamp = strtotime($vars->EventStartDate);
$new_date_timestamp = strtotime($vars->EventEndDate);
echo '<div class="ticker__item"><b>'.$vars->post_title.':</b> '.date('M j, Y', $old_date_timestamp).' &bull; '.date('g:ia', $old_date_timestamp).'-'.date('g:ia', $new_date_timestamp).' &bull; '.tribe_get_city ($vars->ID).', '.tribe_get_stateprovince($vars->ID).' &bull; '.get_the_title(tribe_get_venue_id($vars->ID));
?>
