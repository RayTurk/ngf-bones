<?php 
    if (get_search_query() !="") {
        $nf_query = ' ('.get_search_query().')';
    }
?>
<div class="not-found">
    <h2>No posts found</h2>
    <p>No Posts found matching your query<?php echo $nf_query;?>. Please try searching below.</p>
    <?php get_atomic_part('/molecules/searchform.php', 0);?>
</div>