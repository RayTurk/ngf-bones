<?php 
//Design Library Name: Footer
//Description: This is the prototype implimentation of the page Footer. It is very basic
?>	
        <footer id="footer" role="contentinfo" class="four_column">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-3">
                        <?php get_atomic_part('/molecules/localbusiness-footer.php', 0);?>
                        <?php get_atomic_part('/molecules/social-fontawesome.php', 0);?>        
                    </div>
                    <div class="col-md-6 col-lg-3">
                        
                        <?php get_atomic_part('/molecules/footer-menu.php', 0);?>
                        
                    </div>
                    <div class="col-md-6 col-lg-3">
                         
                        <?php get_atomic_part('/molecules/footer-menu2.php', 0);?>
                        
                    </div>
                    <div class="col-md-6 col-lg-3">
                             
                        <?php get_atomic_part('/molecules/footer-menu3.php', 0);?>
                        
                    </div>
                </div>
                
                
            </div>
        </footer>
		<?php get_atomic_part('/molecules/copyright.php', 0);?>