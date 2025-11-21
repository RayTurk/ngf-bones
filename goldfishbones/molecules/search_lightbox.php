<style>
    .search_lighbox {
        display: inline;
    }
    .searchbox {
        background:#fff;
        padding:1em;
        max-width: 500px;
        margin: 0 auto;
    }
</style>
<div class="search_lighbox">
    <a class="lightbox-inline" href="#<?php echo $vars['lightboxID'];?>"><span class="text"><?php echo $vars['button_text'];?></span></a>
    <div class="searchbox mfp-hide" id="<?php echo $vars['lightboxID'];?>">
        <?php get_atomic_part('/molecules/searchform.php', 0);?>
    </div>
</div>