<div id="navigation">
    <div class="container">
        <nav class="navbar navbar-toggleable-md">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>Menu 
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
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

        </nav>
    </div>
</div>
    
