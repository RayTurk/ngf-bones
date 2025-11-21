<?php
//Design Library Name: Blog
//Description: This is the Prototype Implimentation of the main Blog Feed  It includes a loop of all blog posts and a fully widgetized sidebar.
?>
<!-- Begin Template: Blog -->
<div id="template-blog">
    <?php get_atomic_part ('/molecules/page_title.php', $args);?>
    <div class="container main-content">
        <?php get_atomic_part('/organisms/allcats.php', $args);?>  
        <?php get_atomic_part('/organisms/loop-all_posts.php', $args);?>    
            
    </div>
</div>
<!-- End Template: Blog -->