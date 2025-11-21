<?php
global $theme_vars;
echo get_sub_field ('phone');
if (get_sub_field('phone') == "") {
    $number = $theme_vars['phone'];
}
else {
    $number= get_sub_field('phone');
}
?>
<div id="<?php echo get_sub_field('css_id') ;?>" class="page_section cta_text_call"> 
		<div class="container">
            <span class="cta"><?php echo get_sub_field('call_to_action');?></span><a class="btn phone" rel="nofollow" target="_blank" href="tel: +1<?php echo preg_replace("/[^0-9]/","",$number);?>"><?php echo $number;?></a>
		</div>
</div>