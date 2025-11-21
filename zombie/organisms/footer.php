<?php 
//Design Library Name: Footer
//Description: This is the prototype implimentation of the page Footer. It is very basic
?>	
        <footer id="footer" role="contentinfo" class="two_column">
            <div class="container text-center">
                <div class="row">
                    <div class="col-lg-6 text-lg-left">
                        <?php get_atomic_part('/molecules/localbusiness-footer.php', 0);?>    
                    </div>
                    <div class="col-lg-6 text-lg-right">
                        <div class="menu"><?php get_atomic_part('/molecules/footer-menu.php', 0);?></div>    
                        <?php get_atomic_part('/molecules/social-fontawesome.php', 0);?>
                    </div>
                </div>
                
                
            </div>
        </footer>
		<?php get_atomic_part('/molecules/copyright.php', 0);?>