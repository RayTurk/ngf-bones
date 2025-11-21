<!--Schema Markup See http://google.schema.org/LocalBusiness for more details and syntax-->
<?php global $theme_vars;?> 
<div class= "slb" itemscope itemtype="http://schema.org/LocalBusiness">
    <span class="name" itemprop="name"><?php echo $theme_vars['Company Name'];?></span><br>
    <p class="address" itemprop="address"><?php echo $theme_vars['Street Address'].' <br>'.$theme_vars['City'].', '.$theme_vars['State'].' '.$theme_vars['Zip'];?></p>
    <a title="click to call" class="phone" itemprop="telephone" rel="nofollow" href="tel: +1<?php echo preg_replace("/[^0-9]/","",$theme_vars['phone']);?>"><?php echo $theme_vars['phone'];?></a>
    <p class="hours" itemprop="openingHours" content="<?php echo $theme_vars['Hours Schema'];?>"><?php echo $theme_vars['Hours Visual'];?></p>
</div>

<!--End Schema Markukp-->