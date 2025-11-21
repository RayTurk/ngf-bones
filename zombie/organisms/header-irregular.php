<?php 
//Design Library Name: Header
//Description: This is the prototype implimentation of the page header.  It includes a logo, information area and navigation
?>
		<a href="#content" title="Skip Navigation" href="#content" class="sr-only sr-only-focusable">Skip to main content</a>
		<header id="header">
            <div class="container text-center">
                <div class="row">
                    <div class="col-md-8 text-md-left">
                        <?php get_atomic_part ('/molecules/logo.php', 0);?>
                    </div>
                    <div class="col-md-4 text-md-right">
                        <?php get_atomic_part ('/molecules/header-cta.php', 0);?>
                        <?php get_atomic_part ('/molecules/phone.php', 0);?>
                    </div>
                </div>
            </div>
        <?php get_atomic_part ('/molecules/navigation.php', 0);?>
        </header>
        