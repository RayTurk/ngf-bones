<?php
require get_template_directory() . '/plugin-update-checker/plugin-update-checker.php';
$myUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
  'http://zombie.ryukin.ngfdev.com/update/zombie.json',
  __FILE__,
  'zombie'
);

if (function_exists('acf_add_options_page')) {

  acf_add_options_page(
    array(
      'page_title'   => 'Parent Theme Settings',
      'menu_slug'   => 'zombie_settings',
    )
  );
}
function admin_style()
{
  wp_enqueue_style('admin_styles', get_template_directory_uri() . '/css/admin.css');
  wp_enqueue_script('admin_script', get_template_directory_uri() . '/js/admin.js');
}
add_action('admin_enqueue_scripts', 'admin_style');

//Change Default Gallery Link to Media File instead of Attachment Page
function my_gallery_default_type_set_link($settings)
{
  $settings['galleryDefaults']['link'] = 'file';
  return $settings;
}
add_filter('media_view_settings', 'my_gallery_default_type_set_link');

//Magical Minifying Function
function sanitize_output($buffer)
{
  $search = array(
    '/\>[^\S ]+/s',     // strip whitespaces after tags, except space
    '/[^\S ]+\</s',     // strip whitespaces before tags, except space
    '/(\s)+/s',         // shorten multiple whitespace sequences
    '/<!--(.|\s)*?-->/' // Remove HTML comments
  );
  $replace = array(
    '>',
    '<',
    '\\1',
    ''
  );

  return $buffer;
}

require get_template_directory() . '/inc/acf.php';

if (!function_exists('bootstrapBasicSetup')) {
  /**
   * Setup theme and register support wp features.
   */
  function bootstrapBasicSetup()
  {
    /**
     * Make theme available for translation
     * Translations can be filed in the /languages/ directory
     *
     * copy from underscores theme
     */


    // enable support for post thumbnail or feature image on posts and pages
    add_theme_support('post-thumbnails');

    // add support menu
    register_nav_menus(array(
      'primary' => __('Primary Menu', 'bootstrap-basic'),
      'footer1' => __('Footer 1', 'bootstrap-basic'),
      'footer2' => __('Footer 2', 'bootstrap-basic'),
      'footer3' => __('Footer 3', 'bootstrap-basic'),
    ));
  } // bootstrapBasicSetup
}

/**
 * Extend WordPress search to include custom fields
 *
/**
 * Join posts and postmeta tables
 *
 * http://codex.wordpress.org/Plugin_API/Filter_Reference/posts_join
 */
function cf_search_join($join)
{
  global $wpdb;

  if (is_search()) {
    $join .= ' LEFT JOIN ' . $wpdb->postmeta . ' ON ' . $wpdb->posts . '.ID = ' . $wpdb->postmeta . '.post_id ';
  }

  return $join;
}
add_filter('posts_join', 'cf_search_join');
/**
 * Modify the search query with posts_where
 *
 * http://codex.wordpress.org/Plugin_API/Filter_Reference/posts_where
 */
function cf_search_where($where)
{
  global $wpdb;
  if (is_search()) {
    $where = preg_replace(
      "/\(\s*" . $wpdb->posts . ".post_title\s+LIKE\s*(\'[^\']+\')\s*\)/",
      "(" . $wpdb->posts . ".post_title LIKE $1) OR (" . $wpdb->postmeta . ".meta_value LIKE $1)",
      $where
    );
  }
  return $where;
}
add_filter('posts_where', 'cf_search_where');
/**
 * Prevent duplicates
 */
function cf_search_distinct($where)
{
  global $wpdb;

  if (is_search()) {
    return "DISTINCT";
  }

  return $where;
}
add_filter('posts_distinct', 'cf_search_distinct');
//More Search Stuff

add_filter('relevanssi_excerpt_content', 'custom_fields_to_excerpts', 10, 3);
function custom_fields_to_excerpts($content, $post, $query)
{
  //Single Custom Fields
  $custom_field = get_post_meta($post->ID, 'description', true);
  $content .= " " . $custom_field;
  $custom_field = get_post_meta($post->ID, 'title', true);
  $content .= " " . $custom_field;

  //Repeater Custom Fields
  $fields = get_field('repeater_field_name', $post->ID);
  if ($fields) {
    foreach ($fields as $field) {
      $content .= " " . $field['content'];
    }
  }

  //Flexible Custom Fields
  $fields = get_field('main_content', $post->ID);
  if ($fields) {
    foreach ($fields as $field) {
      if ($field['acf_fc_layout'] == "one-column-content") {
        $content .= " " . $field['content'];
      } elseif ($field['acf_fc_layout'] == "two-column-content") {
        $content .= " " . $field['column-one'];
        $content .= " " . $field['column-two'];
      }
    }
  }
  return $content;
}

add_action('after_setup_theme', 'bootstrapBasicSetup');

if (!function_exists('bootstrapBasicWidgetsInit')) {
  /**
   * Register widget areas
   */
  function bootstrapBasicWidgetsInit()
  {
    register_sidebar(array(
      'name'          => __('Navigation bar Cart', 'bootstrap-basic'),
      'id'            => 'navbar-cart',
      'before_widget' => '',
      'after_widget'  => '',
      'before_title'  => '',
      'after_title'   => '',
    ));

    register_sidebar(array(
      'name'          => __('Sidebar Page', 'bootstrap-basic'),
      'id'            => 'sidebar-page',
      'before_widget' => '<aside id="%1$s" class="widget %2$s">',
      'after_widget'  => '</aside>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>',
    ));

    register_sidebar(array(
      'name'          => __('Sidebar Blog', 'bootstrap-basic'),
      'id'            => 'sidebar-blog',
      'before_widget' => '<aside id="%1$s" class="widget %2$s">',
      'after_widget'  => '</aside>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>',
    ));
  } // bootstrapBasicWidgetsInit
}
add_action('widgets_init', 'bootstrapBasicWidgetsInit');

require get_template_directory() . '/inc/BootstrapBasicMyWalkerNavMenu.php';
require get_stylesheet_directory() . '/inc/global_vars.php';

if (!function_exists('bootstrapBasicEnqueueScripts')) {
  /**
   * Enqueue scripts & styles
   */
  function bootstrapBasicEnqueueScripts()
  {
    wp_deregister_style('dashicons');
    wp_deregister_style('admin-bar');
    wp_deregister_style('tribe-events-bootstrap-datepicker-css');
    wp_deregister_style('tribe-events-custom-jquery-styles');
    wp_deregister_style('tribe-events-calendar-style');
    wp_deregister_style('tribe-events-admin-menu');
    wp_deregister_style('mediaelement');
    wp_deregister_style('wp-mediaelement');
    wp_enqueue_style('theme_unified_css', get_stylesheet_directory_uri() . '/css/unified_theme.css');
    wp_dequeue_style('wp-block-library');
    wp_dequeue_style('wp-block-library-theme');
    wp_dequeue_style('wc-blocks-style'); // Remove WooCommerce block CSS
  } // bootstrapBasicEnqueueScripts
}
add_action('wp_enqueue_scripts', 'bootstrapBasicEnqueueScripts');

//This is where the magic Happens. This is how we pass variables to template pages.
function get_atomic_part($filename, $args = 0)
{
  if (locate_template($filename) != "") {
    $vars = $args;
    include(locate_template($filename, false, false));
  } else {
    echo '<!--Error: Template:' . $filename . ' Not Found:-->';
  }
}
//browser class
function mv_browser_body_class($classes)
{
  global $is_lynx, $is_gecko, $is_IE, $is_opera, $is_NS4, $is_safari, $is_chrome, $is_iphone;
  if ($is_lynx) $classes[] = 'lynx';
  elseif ($is_gecko) $classes[] = 'gecko';
  elseif ($is_opera) $classes[] = 'opera';
  elseif ($is_NS4) $classes[] = 'ns4';
  elseif ($is_safari) $classes[] = 'safari';
  elseif ($is_chrome) $classes[] = 'chrome';
  elseif ($is_IE) {
    $classes[] = 'ie';
    if (preg_match('/MSIE ([0-9]+)([a-zA-Z0-9.]+)/', $_SERVER['HTTP_USER_AGENT'], $browser_version))
      $classes[] = 'ie' . $browser_version[1];
  } else $classes[] = 'unknown';
  if ($is_iphone) $classes[] = 'iphone';
  if (stristr($_SERVER['HTTP_USER_AGENT'], "mac")) {
    $classes[] = 'osx';
  } elseif (stristr($_SERVER['HTTP_USER_AGENT'], "linux")) {
    $classes[] = 'linux';
  } elseif (stristr($_SERVER['HTTP_USER_AGENT'], "windows")) {
    $classes[] = 'windows';
  }
  return $classes;
}
add_filter('body_class', 'mv_browser_body_class');
/* Register template redirect action callback */
add_action('template_redirect', 'meks_remove_wp_archives');

/* Remove archives */
function meks_remove_wp_archives()
{
  //If we are on category or tag or date or author archive
  if (is_tag() || is_date() || is_author()) {
    wp_redirect(home_url());
  }
}

function clone_layout($page_id, $css_field_id)
{
  if (have_rows('page_builder_loop', $page_id)):
    // loop through the rows of data
    while (have_rows('page_builder_loop', $page_id)) : the_row();
      $subcss = get_sub_field('css_id');
      $slug = '/templates/section-' . get_row_layout() . '.php';

      if ($subcss == $css_field_id) {
        //only output builder sections for items in our array
        get_atomic_part($slug);
      }
    endwhile;
  else :

    echo 'not found.';

  endif;
}
add_image_size('google_fav', 48, 48, true); //we need a crop size that will make google happy.

function ngf_googleIconUpdate($metaTags)
{
  //Updating the iconlist to include our Google Happy Icon Size
  $metaTags = array();
  $icon48 = get_site_icon_url(48);
  if (empty($icon48) && is_customize_preview()) {
    $icon48 = '/favicon.ico'; // Serve default favicon URL in customizer so element can be updated for preview.
  }
  if ($icon48) {
    $metaTags[] = sprintf('<link rel="icon" href="%s" sizes="48x48" />', esc_url($icon48));
  }
  $icon_180 = get_site_icon_url(180);
  if ($icon_180) {
    $metaTags[] = sprintf('<link rel="apple-touch-icon" href="%s" />', esc_url($icon_180));
  }
  $icon_270 = get_site_icon_url(270);
  if ($icon_270) {
    $metaTags[] = sprintf('<meta name="msapplication-TileImage" content="%s" />', esc_url($icon_270));
  }
  return $metaTags;
}
// here we attach the function to the filter
add_filter('site_icon_meta_tags', 'ngf_googleIconUpdate', 10, 1);
add_action('wp_head', 'add_css_head');
function add_css_head()
{
  if (is_user_logged_in()) {
?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/adminbar.css">
  <?php
  }
}

/**
 * Enqueue Swiper.js Slider Library
 * Add this to your functions.php file after the existing bootstrapBasicEnqueueScripts function
 */

if (!function_exists('zombie_enqueue_swiper')) {
  /**
   * Enqueue Swiper slider assets
   */
  function zombie_enqueue_swiper()
  {
    // Get theme version for cache busting
    $theme_version = wp_get_theme()->get('Version');

    // Swiper CSS
    wp_enqueue_style(
      'swiper-css',
      get_template_directory_uri() . '/node_modules/swiper/swiper-bundle.min.css',
      array(),
      '11.0.5'
    );

    // Swiper JavaScript
    wp_enqueue_script(
      'swiper-js',
      get_template_directory_uri() . '/node_modules/swiper/swiper-bundle.min.js',
      array(), // No dependencies (vanilla JS)
      '11.0.5',
      true // Load in footer
    );

    // Theme slider initialization
    wp_enqueue_script(
      'zombie-sliders',
      get_template_directory_uri() . '/js/sliders.js',
      array('swiper-js'), // Depends on Swiper
      $theme_version,
      true // Load in footer
    );
  }
}
add_action('wp_enqueue_scripts', 'zombie_enqueue_swiper');


/**
 * Optional: Add Swiper custom styles
 * Customize Swiper appearance to match your theme
 */
if (!function_exists('zombie_swiper_custom_styles')) {
  function zombie_swiper_custom_styles()
  {
  ?>
    <style>
      /* Swiper Custom Styles */
      .swiper {
        width: 100%;
        height: 100%;
      }

      /* Pagination bullets */
      .swiper-pagination-bullet {
        background: #fff;
        opacity: 0.5;
      }

      .swiper-pagination-bullet-active {
        opacity: 1;
        background: var(--bs-primary, #0d6efd);
      }

      /* Navigation arrows */
      .swiper-button-next,
      .swiper-button-prev {
        color: var(--bs-primary, #0d6efd);
      }

      .swiper-button-next:after,
      .swiper-button-prev:after {
        font-size: 30px;
      }

      /* Mobile navigation adjustments */
      @media (max-width: 768px) {

        .swiper-button-next,
        .swiper-button-prev {
          display: none;
        }
      }

      /* Testimonial slider specific */
      .testimonial-swiper {
        padding: 40px 20px;
      }

      .testimonial-swiper .swiper-pagination {
        bottom: 0;
      }

      /* Gallery slider specific */
      .gallery-swiper .swiper-slide {
        display: flex;
        align-items: center;
        justify-content: center;
      }

      .gallery-swiper img {
        width: 100%;
        height: auto;
        object-fit: cover;
      }
    </style>
<?php
  }
}
add_action('wp_head', 'zombie_swiper_custom_styles', 100);
?>