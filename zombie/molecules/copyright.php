<?php global $theme_vars;
  
?>
<div id="copyright">
    <div class="container text-center">
        <div class="row">
            <div class="col-lg-8 text-lg-left left">
                <div>
                &copy;<?php echo date('Y').' '.$theme_vars['Company Name'];?> All Rights Reserved. 
                <?php
                  wp_nav_menu( array(
                    'menu'		=> 'Copyright Menu',
                    'container'         => false,
                    'depth'           => '-1',
					'fallback_cb'    => '__return_false'

                  ));?></div>
            </div>
            <div class="col-lg-4 text-lg-right right">
                <div>Web Design By <a href="https://neongoldfish.com">Neon Goldfish</a></div>
            </div>
        </div>
    </div>
</div>