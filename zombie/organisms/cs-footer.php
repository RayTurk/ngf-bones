<?php 
//Design Library Name: Footer
//Description: This is the prototype implimentation of the page Footer. It is very basic
global $theme_vars;
?>	
        <footer id="footer" role="contentinfo" class="cs_footer">
            <div class="container text-center">
                <div class="row">
                    <div class="col-lg-4 text-lg-left">
                        <?php get_atomic_part('/molecules/footer-logo.php', 0);?>    
                        <?php get_atomic_part('/molecules/social-backend.php', 0);?>
                    </div>
                    <div class="col-lg-4 text-lg-left">
                        <h2>Contact Details</h2>
                        <strong class="name"><?php echo $theme_vars['Company Name'];?></strong>
                        <address><?php echo $theme_vars['Street Address'].'<br> '.$theme_vars['City'].', '.$theme_vars['State'].' '.$theme_vars['Zip'];?><a href="https://maps.google.com/?q=<?php echo $theme_vars['Street Address'].''.$theme_vars['City'].' '.$theme_vars['State'].' '.$theme_vars['Zip'];?>"><br>Map and Directions</a>
                        </address>
                        <p class="phone"><strong>Phone:</strong> <?php get_atomic_part('molecules/phone.php');?></p>
                        
                    </div>
                    <div class="col-lg-4 text-lg-left">
                        <?php echo $theme_vars['hours'];?>
                    </div>
                </div>
                
                
            </div>
            <?php get_atomic_part('/molecules/copyright.php', 0);?>
        </footer>
		