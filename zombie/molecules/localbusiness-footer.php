<div class= "slb">
	
    <?php 
		global $theme_vars;
        $logo = get_field ('footer_logo', 'option');
        if ($logo != "") {
            
            
            echo '<img class="logo" itemprop="image" src="'.wp_get_attachment_url($logo).'" alt="'.get_bloginfo('name').'">';
            
        }
        else {
            echo get_bloginfo('name');
        }
    ?>
    <span class="name sr-only"><?php echo $theme_vars['Company Name'];?></span><br>
    <p class="address"><?php echo $theme_vars['Street Address'].' <br>'.$theme_vars['City'].', '.$theme_vars['State'].' '.$theme_vars['Zip'];?></p>
    <a title="click to call" class="phone" rel="nofollow" href="tel: +1<?php echo preg_replace("/[^0-9]/","",$theme_vars['phone']);?>"><?php echo $theme_vars['phone'];?></a>
    <div class="hours"><?php echo $theme_vars['hours'];?></div>
</div>

<!--End Schema Markukp-->