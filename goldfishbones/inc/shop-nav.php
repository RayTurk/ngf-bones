<div id="shop-nav">
    <ul>
        <li>
            <a href="/schedule-appointment">Schedule An Appointment</a>
        </li>
        
        <li>
            <a href="/my-account/">
                <?php 
                    if ( is_user_logged_in() ) {
                        echo 'My Account';
                    }
                    else {
                        echo 'Login / Register';
                    }
                ?>
            </a>
        </li>
        <li>
            <span class="cartlink">My Cart</span>
            <div class="minicart">
                <div class="cartlink">Close</div>
                <?php if (is_active_sidebar('navbar-right')) { ?> 
				            
                    <?php dynamic_sidebar('navbar-right'); ?> 

                <?php } ?> 
            </div>
        </li>
    </ul>
</div>
