<?php 
    $tabs = get_sub_field('tabs');
    var_dump($tabs);
?>
<div id="<?php get_sub_field('css_id');?>" class="page_section tabs_section">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <h2><?php echo get_sub_field('headline');?></h2>
                <?php get_atomic_part('organisms/tab-nav.php', $tabs);?>
            </div>
            <div class="col-lg-8">
                <?php get_atomic_part('organisms/tab-tabs.php', $tabs);?>
            </div>
        </div>
    </div>
</div>
<?php
if (!function_exists('ngf_tabscript')) {
    function ngf_tabscript(){ 
?>

    <script type="text/javascript">
      console.log('ready');
        $('.tab_nav a').on( "click", function() {
            console.log('clicky');
            var dest = $(this).attr('href');
            var activeTab = $(this).find('a').attr('href');
            
            $('.tab_nav a').removeClass('active');
            $('.tab').removeClass('active');
            console.log(activeTab);
            $(this).addClass('active');
            $(activeTab).addClass('active');
        });
    </script>
    <?php } 

    add_action('wp_footer', 'ngf_tabscript'); 
}
?>