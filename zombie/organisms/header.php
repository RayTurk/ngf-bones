<?php 
//Design Library Name: Header
//Description: This is the prototype implimentation of the page header.  It includes a logo, information area and navigation
?>
        <?php the_field('gtm_noscript', 'option');?>
        
		<a href="#content" title="Skip Navigation" href="#content" class="sr-only sr-only-focusable">Skip to main content</a>
        <header class="default_header">
            <div id="header">
                <div class="container text-center">
                    <div class="row">
                        <div class="col-md-4 text-md-left">
                            <?php get_atomic_part ('/molecules/logo.php', 0);?>
                        </div>
                        <div class="col-md-8 text-md-right">
                            <div class="cta">CTA Or Address Here<br>Maybe a second line.</div>
                            <?php get_atomic_part ('/molecules/phone.php', 0);?>
                        </div>
                    </div>
                </div>
            </div>
            <?php get_atomic_part ('/molecules/navigation.php', 0);?>
        </header>
