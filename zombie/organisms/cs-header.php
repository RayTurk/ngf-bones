<?php 
//Design Library Name: Header
//Description: This is the prototype implimentation of the page header.  It includes a logo, information area and navigation
?>
        <?php echo get_field('gtm_noscript', 'option');?>
        
		<a href="#content" title="Skip Navigation" href="#content" class="sr-only sr-only-focusable">Skip to main content</a>
        <header class="cs_header">
            <div id="header">
                <div class="container text-center">
                    <div class="row">
                        <div class="col logo_wrap text-left">
                            <?php get_atomic_part ('/molecules/logo.php', 0);?>
                        </div>
                        <div class="col phone_wrap text-right">
                            
                            <?php get_atomic_part ('/molecules/phone.php', 0);?>
                        </div>
                    </div>
                </div>
            </div>
            
        </header>
