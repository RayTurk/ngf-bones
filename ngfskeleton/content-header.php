<div class="col-sm-6">
<?php if (is_page ('home')) { ?>
    <h1 id="logo_container">
        <a title="Return to Home" href="/">
            <img src="<?php echo get_stylesheet_directory_uri();?>/img/logo.png" alt="<?php echo bloginfo('name');?>">
        </a>
    </h1>
<?php } else { ?>
    <a Title="return to home" href="/">
        <img src="<?php echo get_stylesheet_directory_uri();?>/img/logo.png" alt="<?php echo bloginfo('name');?>">
    </a>
<?php } ?>
</div>
<div class="col-sm-6">
    419-555-1212
</div>