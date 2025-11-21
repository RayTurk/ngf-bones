<?php 
//Design Library Name: Header (Mini)
//Description: A Smaller, More Compact Version of the Header
?>
        <?php echo get_field ('gtm_noscript', 'option');?>
		<a href="#content" title="Skip Navigation" href="#content" class="sr-only sr-only-focusable">Skip to main content</a>
		<header id="header" class="mini_header">
            <div class="container">
                <nav class="navbar navbar-toggleable-md">
                    <div class="logo_col">
                        <?php get_atomic_part('/molecules/logo.php',0);?>
                    </div>
                    <div class="toggle">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown2" aria-controls="navbarNavDropdown2" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-bars"></i> <br><span>Menu</span>
                        </button>        
                    </div>
                    <div class="menu">
                        <div class="navbar-collapse collapse" id="navbarNavDropdown2">
                            <?php
                              wp_nav_menu( array(
                                'theme_location'		=> 'primary',
                                'container'         => false,
                                'menu_class'				=> '',
                                'fallback_cb'				=> '__return_false',
                                'items_wrap'				=> '<ul id="%1$s" class="navbar-nav mr-auto mt-2 mt-lg-0 %2$s">%3$s</ul>',
                                'walker'            => new b4st_walker_nav_menu()
                              ) );
                            ?>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
        