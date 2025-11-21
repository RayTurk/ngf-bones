<?php
//Design Library Name: Blog
//Description: This is the Prototype Implimentation of the main Blog Feed  It includes a loop of all blog posts and a fully widgetized sidebar.
?>
<!-- Begin Template: Blog -->
<div id="template-blog">
    <?php get_atomic_part ('/molecules/page_title.php', $args);?>
    <div class="container main-content">

        

        <div class="row">
            <div class="col-md-9">
                <?php get_atomic_part('/organisms/loop-all_posts.php', $args);?>    
            </div>
            <div class="col-md-3">
                <?php get_sidebar('blog');?>
            </div>
        </div>
    </div>
</div>
<!-- End Template: Blog -->