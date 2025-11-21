<?php 
//Design Library Name: Header
//Description: This is the prototype implimentation of the page header.  It includes a logo, information area and navigation
?>
        <?php the_field('gtm_noscript', 'option');?>
        
		<a href="#content" title="Skip Navigation" class="sr-only sr-only-focusable">Skip to main content</a>
        <?php get_atomic_part ('/molecules/navigation-flyout.php', 0);?>

        <header class="default_header">
            <div id="header">
                <div class="container text-center">
                    <div class="row">
                        <div class="col-md-4 text-md-left">
                         <?php get_atomic_part ('/molecules/navigation-flyout_toggle.php', 0);?>

                        </div>
                        <div class="col-md-4">                                                       
                            <?php get_atomic_part ('/molecules/logo.php', 0);?>

                        </div>
                        <div class="col-md-4 text-md-right">
                             <?php get_atomic_part ('/molecules/phone.php', 0);?>
                        </div>
                    </div>
                </div>
            </div>
        </header>
