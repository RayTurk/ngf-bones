<div class="logo_inline_cta">
    <div class="container">
        <nav class="navbar navbar-toggleable-md">
            
            <?php get_atomic_part ('/molecules/nav-toggle.php', 0);?>
            <div class="logo_wrap">
                <?php get_atomic_part ('/molecules/logo.php', 0);?>
            </div>
            
            
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                
                <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="navbar-toggler-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. --><path d="M376.6 427.5c11.31 13.58 9.484 33.75-4.094 45.06c-5.984 4.984-13.25 7.422-20.47 7.422c-9.172 0-18.27-3.922-24.59-11.52L192 305.1l-135.4 162.5c-6.328 7.594-15.42 11.52-24.59 11.52c-7.219 0-14.48-2.438-20.47-7.422c-13.58-11.31-15.41-31.48-4.094-45.06l142.9-171.5L7.422 84.5C-3.891 70.92-2.063 50.75 11.52 39.44c13.56-11.34 33.73-9.516 45.06 4.094L192 206l135.4-162.5c11.3-13.58 31.48-15.42 45.06-4.094c13.58 11.31 15.41 31.48 4.094 45.06l-142.9 171.5L376.6 427.5z"/></svg>
                    </span>
                </button>
                <?php
                      wp_nav_menu( array(
                        'theme_location'		=>
                'primary', 'container' => false, 'menu_class' => '', 'fallback_cb' => '__return_false', 'items_wrap' => '
                <ul id="%1$s" class="navbar-nav %2$s">
                    %3$s
                </ul>
                ', 'walker' => new b4st_walker_nav_menu() ) ); ?>
            </div>
            <div class="cta">
                <?php get_atomic_part ('/molecules/nav-cta.php', 0);?>
            </div>
        </nav>
    </div>
</div>