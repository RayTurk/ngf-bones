
<?php $old_date_timestamp = strtotime($vars->EventStartDate);?>
<div class="event_wrap">
    <div class="event">
        <span class="date text-center">
            <span class="month"><?php echo date('M', $old_date_timestamp);?></span>
            <span class="day"><?php echo date('j', $old_date_timestamp);?></span>
        </span>
        <div class="details">
            <h3><?php echo $vars->post_title;?></h3>
            <a Title="Permalink to: <?php echo $vars->post_title;?>" href="<?php echo get_permalink($vars->ID);?>">View Details &raquo;&raquo;</a>
        </div>
    </div>
</div>