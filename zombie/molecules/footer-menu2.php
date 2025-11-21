    
<?php
	$slug = 'footer2';
	$menu = get_nav_menu_locations();
	if (!empty($menu[$slug])) {
		$string = get_term($menu[$slug], 'nav_menu')->name;
		echo '<div class="menu footer1"><div class="title">'.$string.'</div>';
		wp_nav_menu( array(
              'theme_location'		=> 'footer2',
              'container'         => false,

          ));
        echo '</div>';
	}
?>