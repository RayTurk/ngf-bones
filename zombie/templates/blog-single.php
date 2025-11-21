<?php
//Design Library Name: Blog
//Description: This is the Prototype Implimentation of the main Blog Feed  It includes a loop of all blog posts and a fully widgetized sidebar.
?>
<!-- Begin Template: Blog -->
<div id="template-blog">
    <?php get_atomic_part ('/molecules/page_title.php', $args);?>
    <div class="container main-content">
        
        <?php echo apply_filters( 'the_content', $args['content']); ?>    

    </div>
            
        
</div>
<!-- End Template: Blog -->