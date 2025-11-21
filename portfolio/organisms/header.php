<?php 
global $theme_vars;
//Design Library Name: Header
//Description: This is the prototype implimentation of the page header.  It includes a logo, information area and navigation
?>
        <?php echo get_field('gtm_noscript', 'option');?>
        
		<a href="#content" title="Skip Navigation" href="#content" class="sr-only sr-only-focusable">Skip to main content</a>
        <header class="default_header">
            <div id="header">
                <div class="top">
					<div class="container">
						
						<a style="color:inherit; text-decoration:none" href="https://maps.google.com/?q=<?php echo $theme_vars['Street Address'].' '.$theme_vars['City'].' '.$theme_vars['State'].' '.$theme_vars['Zip'];?>"><?php echo $theme_vars['Street Address'].', '.$theme_vars['City'].', '.$theme_vars['State'].' '.$theme_vars['Zip'];?></a>
                    
                            
                    
                        
					</div>
				</div>
                <div class="container">

                    <nav class="navbar navbar-toggleable-md">
                        <div id="logo-wrapper">
                       <?php get_atomic_part ('/molecules/logo.php', 0);?>
                        </div>
                          <?php get_atomic_part ('/molecules/phone.php', 0);?>
                         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z"/></svg>
                             <span class="sr-only">Menu</span>
                        </button>
                         <div class="collapse navbar-collapse" id="navbarNavDropdown">
                                <?php
                              wp_nav_menu( array(
                                'theme_location'		=> 'primary',
                                'container'         => false,
                                'menu_class'				=> '',
                                'fallback_cb'				=> '__return_false',
                                'items_wrap'				=> '<ul id="%1$s" class="navbar-nav %2$s">%3$s</ul>',
                                'walker'            => new b4st_walker_nav_menu()
                              ) );
                            ?>

                          </div>
                        <?php get_atomic_part('molecules/quotebutton.php');?>
                    </nav>
                </div>
            </div>
           
        </header>
