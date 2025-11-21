<div class="category_loop row">
<?php
    $all_categories = get_categories( $vars );

    foreach ($all_categories as $cat) {

    
    get_atomic_part('/molecules/wc_category-thumb.php', $cat);
    
 }
?>
</div>