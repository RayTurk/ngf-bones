<div class="item">
    <?php 
        $link = get_sub_field('item_link');
        $details = get_sub_field('item_details');
        if ($link != "") {
            echo '<a href="'.$link.'">'.$details.'<span class=learnmore"> - Learn More</span></a>';
        }
        else {
            echo $details;
        }
    ?>
</div>