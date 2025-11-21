<?php global $theme_vars;?>
<a class="phone" href="<?php echo 'tel:+1'.preg_replace("/[^0-9]/","",$theme_vars['phone']);?>" title="Click to Call" rel="nofollow"><?php echo $theme_vars['phone'];?></a>