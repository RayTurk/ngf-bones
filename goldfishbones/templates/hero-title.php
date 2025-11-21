<?php 
global $post
//page title wrapped in Hero Image
?>
<style>
    .hero-title {
        background-repeat: no-repeat;
        background-position: center;
        position: relative;
        padding:2em 0;
        background-size:cover;
        box-shadow: inset 1000px 1000px 1000px rgba(0,0,0, .7)
    }
    .hero-title h1 {
        margin:0;
        line-height: 1em;
        color:#fff;
    }
    @media (min-width:768px) {
        
        .hero-title {
            padding:6em 0;
        }
    }
</style>

<div id="hero_<?php echo $post->ID;?>" class="hero-title" style="background-image: url(<?php echo $vars['hero_bg'];?>)">
    <div class="container">
        <?php get_atomic_part('molecules/page_title.php', $args);?>
    </div>
</div>