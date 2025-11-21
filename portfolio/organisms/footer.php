<?php 
//Design Library Name: Footer
//Description: This is the prototype implimentation of the page Footer. It is very basic
global $theme_vars;
?>	
<?php
        $map = get_field('staticmap', 'option');

    if(!empty($map)) {

?>
<div class="staticmap">

    <a href="https://maps.google.com/?q=<?php echo $theme_vars['Street Address'].' '.$theme_vars['City'].' '.$theme_vars['State'].' '.$theme_vars['Zip'];?>"><span class="sr-only">Map and Directions</span>
        <?php echo wp_get_attachment_image($map['id'], 'full');?>    
    </a>

</div>
<?php } ?>
        <footer id="footer" role="contentinfo" class="four_column">
            
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                         <?php get_atomic_part('/molecules/logo.php', 0);?>
                    </div>
                    <div class="col-lg-3">
                        <div class="menu"><?php get_atomic_part('/molecules/footer-menu.php', 0);?></div>    
                        
                    </div>
                    <div class="col-lg-3 info">
                        <h2>Contact Details</h2>
                        <p class="name"><?php echo $theme_vars['Company Name'];?></p>
                        <address><?php echo $theme_vars['Street Address'].', '.$theme_vars['City'].', '.$theme_vars['State'].' '.$theme_vars['Zip'];?><a href="https://maps.google.com/?q=<?php echo $theme_vars['Street Address'].'<br>'.$theme_vars['City'].' '.$theme_vars['State'].' '.$theme_vars['Zip'];?>"><br>Map</a>
                        </address>
                        <p class="phone"><strong>Phone:</strong> <?php get_atomic_part('molecules/phone.php');?></p>
                        <div class="social">
                            <h2>Connect With Us</h2>
                            <?php
                                $socials = get_field('social_link', 'option');
                                if (!empty($socials)) {
                                    
                                
                                    foreach ($socials as $link) {
                                        
                            ?>
                                <a href="<?php echo $link['url'];?>">
                                    <span class="sr-only"><?php echo $link['name'];?></span>
                                    <img alt="" src="<?php echo $link['icon']['url'];?>" width="39px" height="39px">
                                </a>
                            <?php
                                    }
                                }
                            ?>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <?php get_atomic_part('molecules/quotebutton.php');?>
                    </div>
                </div>
                
                
            </div>
        </footer>
		<?php get_atomic_part('/molecules/copyright.php', 0);?>