<meta charset="<?php bloginfo('charset'); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title><?php wp_title('|', true, 'right'); ?></title>
<meta name="viewport" content="width=device-width">
<meta name="format-detection" content="telephone=no">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">


<!--wordpress head-->
<?php wp_head(); ?>
<?php echo get_field('gtm Script', 'option');?>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<?php $gfont_url = "hhttps://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap";?>

<!-- optionally increase loading priority -->
<link rel="preload" as="style" href="<?php echo $gfont_url;?>">

<!-- async CSS -->
<link rel="stylesheet" media="print" onload="this.onload=null;this.removeAttribute('media');" href="<?php echo $gfont_url;?>">

<!-- no-JS fallback -->
<noscript>
    <link rel="stylesheet" href="<?php echo $gfont_url;?>">
	
</noscript>