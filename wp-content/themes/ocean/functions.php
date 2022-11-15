<?php

/*
=============================================================
  Enqueue Scripts and Styles
=============================================================
*/
function theme_enqueue_scripts() {
  //CSS
  wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '5.1', 'all');
  wp_enqueue_style('fontawesome', get_template_directory_uri() . '/css/all.min.css', array(), '4.1', 'all');
  wp_enqueue_style('slick-slider',get_template_directory_uri() . '/css/slick.css', array(), '3.3.4', 'all');
  // wp_enqueue_style('slick-theme-css', get_template_directory_uri() . '/css/slick-theme.css', array(), '3.3.4', 'all');
  wp_enqueue_style('aos',get_template_directory_uri() . '/css/aos.css', array(), '3.3.4', 'all');
  wp_enqueue_style('font-awesome','https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
  wp_enqueue_style('ocean', get_template_directory_uri() . '/css/style.css', array(), '3.3.5', 'all');
  wp_enqueue_style('nprogress', get_template_directory_uri() . '/css/nprogress.css', array(), '3.3.5', 'all');
  wp_enqueue_style('ocean-css', get_template_directory_uri() . '/style.css', array(), '3.3.50', 'all');

 	//JS
  wp_enqueue_script('jquery', get_stylesheet_directory_uri() . '/js/jquery.min.js', array('jquery'), '1.0.0', true);
  wp_enqueue_script('bootstrap-js', get_stylesheet_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '1.0.0', true);
  wp_enqueue_script('pace-js', get_stylesheet_directory_uri() . '/js/pace.js', array('jquery'), '1.0.0', true);
  wp_enqueue_script('slick-js', get_stylesheet_directory_uri() . '/js/slick.js', array('jquery'), '1.0.1', true);
  wp_enqueue_script('jquery-waypoints', get_stylesheet_directory_uri() . '/js/jquery.waypoints.min.js', array('jquery'), '1.0.0', true);
  wp_enqueue_script('aos', get_stylesheet_directory_uri() . '/js/aos.js', array('jquery'), '1.0.0', true);
  // wp_enqueue_script('anime', get_stylesheet_directory_uri() . '/js/anime.min.js', array('jquery'), '1.0.0', true);
  wp_enqueue_script('multi-animated', get_stylesheet_directory_uri() . '/js/multi-animated-counter.js', array('jquery'), '1.0.0', true);
  // wp_enqueue_script('video-bg', get_stylesheet_directory_uri() . '/js/jquery.videoBG.js', array('jquery'), '1.0.0', true);
  wp_enqueue_script('ocean', get_stylesheet_directory_uri() . '/js/script.js', array('jquery'), '3.3.5', true);
 }
add_action('wp_enqueue_scripts', 'theme_enqueue_scripts');




/*
=============================================================
  Hide admin bar
=============================================================
*/
function remove_admin_login_header() {
  remove_action('wp_head', '_admin_bar_bump_cb');
}
add_action('get_header', 'remove_admin_login_header');

function remove_admin_bar(){
  show_admin_bar(false);
}
add_action('after_setup_theme', 'remove_admin_bar');

/*
=============================================================
  Register Menus
=============================================================
*/
function register_my_menus() {
  add_theme_support('menus');
  register_nav_menu('primary_header','Primary header navigation');
  register_nav_menu('primary_mobile','Mobile header navigation');
  register_nav_menu('company_header','Primany company header navigation');
  register_nav_menu('real_estate','Real estate header navigation');
  register_nav_menu('footer_primary','Footer primary navigation');
  register_nav_menu('footer_contracting','Footer contracting navigation');
  register_nav_menu('footer_real_estate','Footer real estate navigation');
  register_nav_menu('footer_company','Footer company navigation');
}
add_action('init', 'register_my_menus');


/*
===================================
  Theme support function
===================================
*/
add_theme_support('html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption'));
add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('post-formats', array('aside', 'image', 'video', 'quote', 'link', 'audio', 'gallery', 'status'));
add_theme_support('custom-background');
add_theme_support('custom-header');


function cc_customize_register($wp_customize) {
	//header logo
	$wp_customize->add_section("site_logo", array(
    "title" => __("Site Logo", "ocean"),
    "priority" => 30,
	));
  $wp_customize->add_setting("logo_url", array(
    "default" => "",
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control(
    $wp_customize, "logo_url", array(
    'label' => __('Upload a white logo', 'ocean'),
    'section' => 'site_logo',
    'settings' => 'logo_url'
    )
  ));
  //logo text
  $wp_customize->add_section("site_logo_text", array(
    "title" => __("Site Logo text", "ocean"),
    "priority" => 30,
  ));
  $wp_customize->add_setting("logo_text", array(
    "default" => "",
  ));
  $wp_customize->add_control(new WP_Customize_Control(
    $wp_customize, "logo_text", array(
    'label' => __('Logo text', 'ocean'),
    'section' => 'site_logo_text',
    'settings' => 'logo_text'
    )
  ));
  //footer logo
  $wp_customize->add_section("footer_logo", array(
    "title" => __("Footer Logo", "ocean"),
    "priority" => 30,
  ));
  $wp_customize->add_setting("footer_logo_url", array(
    "default" => "",
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control(
    $wp_customize, "footer_logo_url", array(
    'label' => __('Upload a footer logo', 'ocean'),
    'section' => 'footer_logo',
    'settings' => 'footer_logo_url'
    )
  ));
  /*Site copyright*/
  $wp_customize->add_section("site_copyright", array(
	    "title" => __("Site copyright", "ocean"),
	    "priority" => 30,
	));
  $wp_customize->add_setting("copyright_text", array(
    "default" => "",
  ));
  $wp_customize->add_control(new WP_Customize_Control(
      $wp_customize, "copyright_text", array(
      'label' => __('Copyright Text', 'ocean'),
      'section' => 'site_copyright',
      'settings' => 'copyright_text'
      )
  ));
  /*Social media links*/
  $wp_customize->add_section("social_links", array(
    "title" => __("Social media links", "ocean"),
    "priority" => 30,
  ));
  
  $wp_customize->add_setting("linkedin_link", array(
      "default" => "",
  ));
  $wp_customize->add_setting("twitter_link", array(
      "default" => "",
  ));
  $wp_customize->add_setting("youtube_link", array(
      "default" => "",
  ));
  $wp_customize->add_setting("linkedin_logo", array(
    "default" => "",
  ));
  $wp_customize->add_setting("twitter_logo", array(
    "default" => "",
  ));
  $wp_customize->add_setting("youtube_logo", array(
    "default" => "",
  ));
  $wp_customize->add_control(new WP_Customize_Control(
      $wp_customize, "linkedin_link", array(
      'label' => __('Linkedin link', 'ocean'),
      'section' => 'social_links',
      'settings' => 'linkedin_link'
      )
  ));
  $wp_customize->add_control(new WP_Customize_Control(
      $wp_customize, "twitter_link", array(
      'label' => __('Twitter link', 'ocean'),
      'section' => 'social_links',
      'settings' => 'twitter_link'
      )
  ));
  $wp_customize->add_control(new WP_Customize_Control(
      $wp_customize, "youtube_link", array(
      'label' => __('Youtube link', 'ocean'),
      'section' => 'social_links',
      'settings' => 'youtube_link'
      )
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control(
    $wp_customize, "linkedin_logo", array(
    'label' => __('Upload Linkedin logo', 'ocean'),
    'section' => 'social_links',
    'settings' => 'linkedin_logo'
    )
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control(
    $wp_customize, "twitter_logo", array(
    'label' => __('Upload Twitter logo', 'ocean'),
    'section' => 'social_links',
    'settings' => 'twitter_logo'
    )
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control(
    $wp_customize, "youtube_logo", array(
    'label' => __('Upload Youtube logo', 'ocean'),
    'section' => 'social_links',
    'settings' => 'youtube_logo'
    )
  ));
}
add_action("customize_register", "cc_customize_register");

/*
  ===================================
  Excerpt Limit
  ===================================
*/
function custom_excerpt_length( $length ) {
  if ( is_admin() ) {
    return $length;
  }
  return 10;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

/*
  ===================================
  Excerpt Custom
  ===================================
*/
function wpdocs_excerpt_more( $more ) {
  return '...';
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );

/*-------------------------------------------------------------
  Custom Post Type - Contracting
---------------------------------------------------------------*/
function post_type_contracting() {
  $labels = array(
    'name'               => _x( 'Contracting', 'post type general name' ),
    'singular_name'      => _x( 'Contracting', 'post type singular name' ),
    'add_new'            => _x( 'Add New', 'Contracting' ),
    'add_new_item'       => __( 'Add New Contracting' ),
    'edit_item'          => __( 'Edit Contracting' ),
    'new_item'           => __( 'New Contracting' ),
    'all_items'          => __( 'All Contracting' ),
    'view_item'          => __( 'View Contracting' ),
    'search_items'       => __( 'Search Contracting' ),
    'not_found'          => __( 'No Contracting found' ),
    'not_found_in_trash' => __( 'No Contracting found in the Trash' ),
    'parent_item_colon'  => '',
    'menu_name'          => 'Contracting'
  );
  $args = array(
    'labels'        => $labels,
    'description'   => 'Add your Contract',
    'public'        => true,
    'menu_position' => 3,
    // 'taxonomies'    => array( 'category' ), //This adds default category to CPT
    'menu_icon'     => 'dashicons-admin-site',
    'supports'      => array( 'title', 'thumbnail','editor', 'page-attributes','excerpt','comments'),
    'has_archive'   => true,
  );
  register_post_type( 'contracting', $args );
}
add_action( 'init', 'post_type_contracting' );

//taxonomy for data
function register_taxonomy_for_contracting()
{
  $labels = [
    'name'              => _x('Contracting categories', 'taxonomy general name'),
    'singular_name'     => _x('Contracting category', 'taxonomy singular name'),
    'search_items'      => __('Search Contracting category'),
    'all_items'         => __('All Contracting categories'),
    'parent_item'       => __('Parent Contracting category'),
    'parent_item_colon' => __('Parent Contracting category:'),
    'edit_item'         => __('Edit Contracting category'),
    'update_item'       => __('Update Contracting category'),
    'add_new_item'      => __('Add New Contracting category'),
    'new_item_name'     => __('New Contracting category Name'),
    'menu_name'         => __('Contracting categories'),
  ];
  $args = [
    'hierarchical'      => true, // make it hierarchical (like categories)
    'labels'            => $labels,
    'show_ui'           => true,
    'show_admin_column' => true,
    'query_var'         => true,
    'rewrite'           => ['slug' => 'Contracting_category'],
  ];
  register_taxonomy('Contracting_category', ['contracting'], $args);
}
add_action('init', 'register_taxonomy_for_contracting');

/*-------------------------------------------------------------
  Custom Post Type - Real Estate
---------------------------------------------------------------*/
function post_type_realestate() {
  $labels = array(
    'name'               => _x( 'Realestate', 'post type general name' ),
    'singular_name'      => _x( 'Realestate', 'post type singular name' ),
    'add_new'            => _x( 'Add New', 'Realestate' ),
    'add_new_item'       => __( 'Add New Realestate' ),
    'edit_item'          => __( 'Edit Realestate' ),
    'new_item'           => __( 'New Realestate' ),
    'all_items'          => __( 'All Realestate' ),
    'view_item'          => __( 'View Realestate' ),
    'search_items'       => __( 'Search Realestate' ),
    'not_found'          => __( 'No Realestate found' ),
    'not_found_in_trash' => __( 'No Realestate found in the Trash' ),
    'parent_item_colon'  => '',
    'menu_name'          => 'Realestate'
  );
  $args = array(
    'labels'        => $labels,
    'description'   => 'Add your Realestate',
    'public'        => true,
    'menu_position' => 3,
    // 'taxonomies'    => array( 'category' ), //This adds default category to CPT
    'menu_icon'     => 'dashicons-admin-site',
    'supports'      => array( 'title', 'thumbnail','editor', 'page-attributes','excerpt','comments'),
    'has_archive'   => true,
  );
  register_post_type( 'realestate', $args );
}
add_action( 'init', 'post_type_realestate' );

//taxonomy for data
function register_taxonomy_for_realestate()
{
  $labels = [
    'name'              => _x('Realestate categories', 'taxonomy general name'),
    'singular_name'     => _x('Realestate category', 'taxonomy singular name'),
    'search_items'      => __('Search Realestate category'),
    'all_items'         => __('All Realestate categories'),
    'parent_item'       => __('Parent Realestate category'),
    'parent_item_colon' => __('Parent Realestate category:'),
    'edit_item'         => __('Edit Realestate category'),
    'update_item'       => __('Update Realestate category'),
    'add_new_item'      => __('Add New Realestate category'),
    'new_item_name'     => __('New Realestate category Name'),
    'menu_name'         => __('Realestate categories'),
  ];
  $args = [
    'hierarchical'      => true, // make it hierarchical (like categories)
    'labels'            => $labels,
    'show_ui'           => true,
    'show_admin_column' => true,
    'query_var'         => true,
    'rewrite'           => ['slug' => 'Realestate_category'],
  ];
  register_taxonomy('Realestate_category', ['realestate'], $args);
}
add_action('init', 'register_taxonomy_for_realestate');

/*-------------------------------------------------------------
  Custom Post Type - Projects
---------------------------------------------------------------*/
function post_type_projects() {
  $labels = array(
    'name'               => _x( 'Projects', 'post type general name' ),
    'singular_name'      => _x( 'Projects', 'post type singular name' ),
    'add_new'            => _x( 'Add New', 'Projects' ),
    'add_new_item'       => __( 'Add New Projects' ),
    'edit_item'          => __( 'Edit Projects' ),
    'new_item'           => __( 'New Projects' ),
    'all_items'          => __( 'All Projects' ),
    'view_item'          => __( 'View Projects' ),
    'search_items'       => __( 'Search Projects' ),
    'not_found'          => __( 'No Projects found' ),
    'not_found_in_trash' => __( 'No Projects found in the Trash' ),
    'parent_item_colon'  => '',
    'menu_name'          => 'Projects'
  );
  $args = array(
    'labels'        => $labels,
    'description'   => 'Add your Projects',
    'public'        => true,
    'menu_position' => 3,
    // 'taxonomies'    => array( 'category' ), //This adds default category to CPT
    'menu_icon'     => 'dashicons-admin-site',
    'supports'      => array( 'title', 'thumbnail','editor', 'page-attributes','excerpt','comments', 'custom-fields'),
    'has_archive'   => true,
  );
  register_post_type( 'projects', $args );
}
add_action( 'init', 'post_type_projects' );

//First taxonomy for projects
function register_taxonomy_for_projects()
{
  $labels = [
    'name'              => _x('Projects categories', 'taxonomy general name'),
    'singular_name'     => _x('Projects category', 'taxonomy singular name'),
    'search_items'      => __('Search Projects category'),
    'all_items'         => __('All Projects categories'),
    'parent_item'       => __('Parent Projects category'),
    'parent_item_colon' => __('Parent Projects category:'),
    'edit_item'         => __('Edit Projects category'),
    'update_item'       => __('Update Projects category'),
    'add_new_item'      => __('Add New Projects category'),
    'new_item_name'     => __('New Projects category Name'),
    'menu_name'         => __('Projects categories'),
  ];
  $args = [
    'hierarchical'      => true, // make it hierarchical (like categories)
    'labels'            => $labels,
    'show_ui'           => true,
    'show_admin_column' => true,
    'query_var'         => true,
    'rewrite'           => ['slug' => 'Projects_category'],
  ];
  register_taxonomy('Projects_category', ['projects'], $args);
}
add_action('init', 'register_taxonomy_for_projects');

/*-------------------------------------------------------------
  Custom Post Type - News
---------------------------------------------------------------*/
function post_type_news() {
  $labels = array(
    'name'               => _x( 'News', 'post type general name' ),
    'singular_name'      => _x( 'News', 'post type singular name' ),
    'add_new'            => _x( 'Add New', 'News'),
    'add_new_item'       => __( 'Add New Projects' ),
    'edit_item'          => __( 'Edit News' ),
    'new_item'           => __( 'New News' ),
    'all_items'          => __( 'All News' ),
    'view_item'          => __( 'View News' ),
    'search_items'       => __( 'Search News' ),
    'not_found'          => __( 'No News found' ),
    'not_found_in_trash' => __( 'No News found in the Trash' ),
    'parent_item_colon'  => '',
    'menu_name'          => 'News'
  );
  $args = array(
    'labels'        => $labels,
    'description'   => 'Add your News',
    'public'        => true,
    'menu_position' => 3,
    // 'taxonomies'    => array( 'category' ), //This adds default category to CPT
    'menu_icon'     => 'dashicons-admin-site',
    'supports'      => array( 'title', 'thumbnail','editor', 'page-attributes','excerpt','comments', 'custom-fields'),
    'has_archive'   => true,
  );
  register_post_type( 'news', $args );
}
add_action( 'init', 'post_type_news' );

//taxonomy for data
function register_taxonomy_for_news()
{
  $labels = [
    'name'              => _x('News categories', 'taxonomy general name'),
    'singular_name'     => _x('News category', 'taxonomy singular name'),
    'search_items'      => __('Search News category'),
    'all_items'         => __('All News categories'),
    'parent_item'       => __('Parent News category'),
    'parent_item_colon' => __('Parent News category:'),
    'edit_item'         => __('Edit News category'),
    'update_item'       => __('Update News category'),
    'add_new_item'      => __('Add New News category'),
    'new_item_name'     => __('New News category Name'),
    'menu_name'         => __('News categories'),
  ];
  $args = [
    'hierarchical'      => true, // make it hierarchical (like categories)
    'labels'            => $labels,
    'show_ui'           => true,
    'show_admin_column' => true,
    'query_var'         => true,
    'rewrite'           => ['slug' => 'Projects_category'],
  ];
  register_taxonomy('News_category', ['news'], $args);
}
add_action('init', 'register_taxonomy_for_news');

add_action('wp_ajax_get_projects', 'get_projects');
add_action('wp_ajax_nopriv_get_projects', 'get_projects');

function get_projects(){

  $offset = $_POST['offset'];
  $catID = $_POST['catID'];
  $status = $_POST['status'];
  $child = $_POST['child'];
  
 if($status!="undefined" && $child!="undefined"){
     
  $posts_array = get_posts(
  array(
      'posts_per_page' => 5,
      'post_type' => 'projects',
      'offset' => $offset,
	  "orderby" => "date",
      "order" => 'ASC',
      'tax_query' => array(
           'relation' => 'AND',
          array(
              'taxonomy' => 'Projects_category',
              'field' => 'term_id',
              'terms' => $catID
               ),
           array(
              'taxonomy' => 'Projects_category',
              'field' => 'term_id',
              'terms' => $status
               ),
            array(
              'taxonomy' => 'Projects_category',
              'field' => 'term_id',
              'terms' => $child
           )
          )
      )
  ); 
  }elseif($status!="undefined" && $child=="undefined"){
   
  $posts_array = get_posts(
  array(
      'posts_per_page' => 5,
      'post_type' => 'projects',
      'offset' => $offset,
	  "orderby" => "date",
      "order" => 'ASC',
      'tax_query' => array(
           'relation' => 'AND',
          array(
              'taxonomy' => 'Projects_category',
              'field' => 'term_id',
              'terms' => $catID
               ),
           array(
              'taxonomy' => 'Projects_category',
              'field' => 'term_id',
              'terms' => $status
               )
          )
      )
  );
  
  }elseif($status=="undefined" && $child!="undefined"){
	   $posts_array = get_posts(
  array(
      'posts_per_page' => 5,
      'post_type' => 'projects',
      'offset' => $offset,
	  "orderby" => "date",
      "order" => 'ASC',
      'tax_query' => array(
           'relation' => 'AND',
          array(
              'taxonomy' => 'Projects_category',
              'field' => 'term_id',
              'terms' => $catID
               ),
           array(
              'taxonomy' => 'Projects_category',
              'field' => 'term_id',
              'terms' => $child
               )
          )
      )
  );
 }else{
     $posts_array = get_posts(
  array(
      'posts_per_page' => 5,
      'post_type' => 'projects',
      'offset' => $offset,
	  "orderby" => "date",
      "order" => 'ASC',
      'tax_query' => array(
           'relation' => 'AND',
          array(
              'taxonomy' => 'Projects_category',
              'field' => 'term_id',
              'terms' => $catID
               )
          )
      )
  ); 
 }
  
  foreach ($posts_array as $p){
      $image = wp_get_attachment_image_src( get_post_thumbnail_id( $p->ID ), 'single-post-thumbnail' );
      if($i == 0){
  ?>
  <div class="row pt-5">
  <div class="col-12 col-lg-8">
    <div class="px-3 px-sm-0">
      <a href="<?php the_permalink($p->ID)?>">
        <div class="me-lg-3 first-image position-relative overflow-hidden">
          <div class="main-image">
            <img class="position-relative object-fit-cover w-100 h-100 position-relative" src="<?php echo $image[0]; ?>" />
          </div>
          <div class="left-item position-absolute top bottom theme bg-white p-4 d-flex align-items-center">
            <div class="inner-contents word-break-all">
              <div class="location d-flex pb-1">
                <div class="image">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/ic-project-location.svg" width="" height="" alt="" />
                </div>
                <div class="text d-flex align-items-center ps-2">
                  <p class="font-octopus-300 font-18px theme color-gray"><?php the_field('featured_location_name', $p->ID); ?></p>
                </div>
              </div>
              <div class="area d-flex pb-1">
                <div class="image">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/ic-project-area.svg" width="" height="" alt="" />
                </div>
                <div class="text d-flex align-items-center ps-2">
                  <p class="font-octopus-300 font-18px theme color-gray"><?php the_field('featured_image_area', $p->ID); ?></p>
                </div>
              </div>
              <div class="price d-flex pb-1">
                <div class="image">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/ic-project-cost.svg" width="" height="" alt="" />
                </div>
                <div class="text d-flex align-items-center ps-2">
                  <p class="font-octopus-300 font-18px theme color-gray"><?php the_field('featured_image_price', $p->ID); ?></p>
                </div>
              </div>
              <div class="firm d-flex pb-1">
                <div class="image">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/ic-project-pmc.svg" width="" height="" alt="" />
                </div>
                <div class="text d-flex align-items-center ps-2">
                  <p class="font-octopus-300 font-18px theme color-gray"><?php the_field('featured_image_firm_name', $p->ID); ?></p>
                </div>
              </div>
              <div class="architect d-flex pb-1">
                <div class="image">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/ic-project-architect.svg" width="" height="" alt="" />
                </div>
                <div class="text d-flex align-items-center ps-2">
                  <p class="font-octopus-300 font-18px theme color-gray"><?php the_field('featured_architect_name', $p->ID); ?></p>
                </div>
              </div>
              <div class="arrow pt-md-4">
                <img src="<?php echo get_template_directory_uri(); ?>/images/ic-arrow-grey.svg" width="" height="" alt="" />
              </div>
            </div>
          </div>
          <div class="floating-text position-absolute">
            <p class="font-octopus-500 font-36px theme color-white"><?php echo get_the_title($p->ID); ?></p>
          </div>
        </div>
      </a>
    </div>
    </div>
  <?php }
  
  if($i == 1){
  ?>
  <div class="col-12 col-lg-4 py-5 py-lg-0">
    <div class="px-3 px-sm-0 h-100">
      <a href="<?php the_permalink($p->ID)?>">
        <div class="second-image position-relative overflow-hidden h-100">
          <div class="main-image h-100">
            <img class="position-relative object-fit-cover w-100 h-100" src="<?php echo $image[0]; ?>" />
          </div>
          <div class="inner-item position-absolute theme bg-white py-4 px-5 d-flex align-items-center right left">
            <div class="inner-contents word-break-all">
              <div class="location d-flex pb-1">
                <div class="image">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/ic-project-location.svg" width="" height="" alt="" />
                </div>
                <div class="text d-flex align-items-center ps-2">
                  <p class="font-octopus-300 font-18px theme color-gray"><?php the_field('featured_location_name', $p->ID); ?></p>
                </div>
              </div>
              <div class="area d-flex pb-1">
                <div class="image">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/ic-project-area.svg" width="" height="" alt="" />
                </div>
                <div class="text d-flex align-items-center ps-2">
                  <p class="font-octopus-300 font-18px theme color-gray"><?php the_field('featured_image_area', $p->ID); ?></p>
                </div>
              </div>
              <div class="price d-flex pb-1">
                <div class="image">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/ic-project-cost.svg" width="" height="" alt="" />
                </div>
                <div class="text d-flex align-items-center ps-2">
                  <p class="font-octopus-300 font-18px theme color-gray"><?php the_field('featured_image_price', $p->ID); ?></p>
                </div>
              </div>
              <div class="firm d-flex pb-1">
                <div class="image">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/ic-project-pmc.svg" width="" height="" alt="" />
                </div>
                <div class="text d-flex align-items-center ps-2">
                  <p class="font-octopus-300 font-18px theme color-gray"><?php the_field('featured_image_firm_name', $p->ID); ?></p>
                </div>
              </div>
              <div class="architect d-flex pb-1">
                <div class="image">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/ic-project-architect.svg" width="" height="" alt="" />
                </div>
                <div class="text d-flex align-items-center ps-2">
                  <p class="font-octopus-300 font-18px theme color-gray"><?php the_field('featured_architect_name', $p->ID); ?></p>
                </div>
              </div>
              <div class="arrow pt-4">
                <img src="<?php echo get_template_directory_uri(); ?>/images/ic-arrow-grey.svg" width="" height="" alt="" />
              </div>
            </div>
          </div>
          <div class="floating-text position-absolute">
            <p class="font-octopus-500 font-36px theme color-white"><?php echo get_the_title($p->ID); ?></p>
          </div>
        </div>
      </a>
    </div>
  </div>
  <?php } 
  
  if($i == 2){
  ?>
    <div class="col-12 col-lg-6 pt-lg-5">
      <div class="px-3 px-sm-0 img-1 img-2">
        <a href="<?php the_permalink($p->ID)?>">
          <div class="me-lg-3 first-image third-image position-relative overflow-hidden">
            <div class="main-image h-100">
              <img class="position-relative object-fit-cover w-100 h-100 position-relative" src="<?php echo $image[0]; ?>" />
            </div>
            <div class="left-item position-absolute top bottom theme bg-white p-4 d-flex align-items-center">
              <div class="inner-contents word-break-all">
                <div class="location d-flex pb-1">
                  <div class="image">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/ic-project-location.svg" width="" height="" alt="" />
                  </div>
                  <div class="text d-flex align-items-center ps-2">
                    <p class="font-octopus-300 font-18px theme color-gray"><?php the_field('featured_location_name', $p->ID); ?></p>
                  </div>
                </div>
                <div class="area d-flex pb-1">
                  <div class="image">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/ic-project-area.svg" width="" height="" alt="" />
                  </div>
                  <div class="text d-flex align-items-center ps-2">
                    <p class="font-octopus-300 font-18px theme color-gray"><?php the_field('featured_image_area', $p->ID); ?></p>
                  </div>
                </div>
                <div class="price d-flex pb-1">
                  <div class="image">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/ic-project-cost.svg" width="" height="" alt="" />
                  </div>
                  <div class="text d-flex align-items-center ps-2">
                    <p class="font-octopus-300 font-18px theme color-gray"><?php the_field('featured_image_price', $p->ID); ?></p>
                  </div>
                </div>
                <div class="firm d-flex pb-1">
                  <div class="image">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/ic-project-pmc.svg" width="" height="" alt="" />
                  </div>
                  <div class="text d-flex align-items-center ps-2">
                    <p class="font-octopus-300 font-18px theme color-gray"><?php the_field('featured_image_firm_name', $p->ID); ?></p>
                  </div>
                </div>
                <div class="architect d-flex pb-1">
                  <div class="image">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/ic-project-architect.svg" width="" height="" alt="" />
                  </div>
                  <div class="text d-flex align-items-center ps-2">
                    <p class="font-octopus-300 font-18px theme color-gray"><?php the_field('featured_architect_name', $p->ID); ?></p>
                  </div>
                </div>
                <div class="arrow pt-4">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/ic-arrow-grey.svg" width="" height="" alt="" />
                </div>
              </div>
            </div>
            <div class="floating-text position-absolute">
              <p class="font-octopus-500 font-36px theme color-white"><?php echo get_the_title($p->ID); ?></p>
            </div>
          </div>
        </a>
      </div>
    </div>
    <?php }
    
    if($i == 3){
  ?>
    <div class="col-12 col-lg-6 py-5">
      <div class="px-3 px-sm-0 img-1">
        <a href="<?php the_permalink($p->ID)?>">
          <div class="first-image third-image position-relative overflow-hidden">
            <div class="main-image h-100">
              <img class="position-relative object-fit-cover w-100 h-100 position-relative" src="<?php echo $image[0]; ?>" />
            </div>
            <div class="left-item position-absolute top bottom theme bg-white p-4 d-flex align-items-center">
              <div class="inner-contents word-break-all">
                <div class="location d-flex pb-1">
                  <div class="image">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/ic-project-location.svg" width="" height="" alt="" />
                  </div>
                  <div class="text d-flex align-items-center ps-2">
                    <p class="font-octopus-300 font-18px theme color-gray"><?php the_field('featured_location_name', $p->ID); ?></p>
                  </div>
                </div>
                <div class="area d-flex pb-1">
                  <div class="image">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/ic-project-area.svg" width="" height="" alt="" />
                  </div>
                  <div class="text d-flex align-items-center ps-2">
                    <p class="font-octopus-300 font-18px theme color-gray"><?php the_field('featured_image_area', $p->ID); ?></p>
                  </div>
                </div>
                <div class="price d-flex pb-1">
                  <div class="image">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/ic-project-cost.svg" width="" height="" alt="" />
                  </div>
                  <div class="text d-flex align-items-center ps-2">
                    <p class="font-octopus-300 font-18px theme color-gray"><?php the_field('featured_image_price', $p->ID); ?></p>
                  </div>
                </div>
                <div class="firm d-flex pb-1">
                  <div class="image">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/ic-project-pmc.svg" width="" height="" alt="" />
                  </div>
                  <div class="text d-flex align-items-center ps-2">
                    <p class="font-octopus-300 font-18px theme color-gray"><?php the_field('featured_image_firm_name', $p->ID); ?></p>
                  </div>
                </div>
                <div class="architect d-flex pb-1">
                  <div class="image">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/ic-project-architect.svg" width="" height="" alt="" />
                  </div>
                  <div class="text d-flex align-items-center ps-2">
                    <p class="font-octopus-300 font-18px theme color-gray"><?php the_field('featured_architect_name', $p->ID); ?></p>
                  </div>
                </div>
                <div class="arrow pt-4">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/ic-arrow-grey.svg" width="" height="" alt="" />
                </div>
              </div>
            </div>
            <div class="floating-text position-absolute">
              <p class="font-octopus-500 font-36px theme color-white"><?php echo get_the_title($p->ID); ?></p>
            </div>
          </div>
        </a>
      </div>
    </div>
    <?php }
    
    if($i == 4){ ?>
    <div class="col-12">
      <div class="px-3 px-sm-0">
      <a href="<?php the_permalink($p->ID)?>">
          <div class="first-image third-image position-relative overflow-hidden">
            <div class="main-image h-100">
              <img class="position-relative object-fit-cover w-100 h-100 position-relative" src="<?php echo $image[0]; ?>" />
            </div>
            <div class="left-item position-absolute top bottom theme bg-white p-4 d-flex align-items-center">
              <div class="inner-contents word-break-all">
                <div class="location d-flex pb-1">
                  <div class="image">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/ic-project-location.svg" width="" height="" alt="" />
                  </div>
                  <div class="text d-flex align-items-center ps-2">
                    <p class="font-octopus-300 font-18px theme color-gray"><?php the_field('featured_location_name', $p->ID); ?></p>
                  </div>
                </div>
                <div class="area d-flex pb-1">
                  <div class="image">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/ic-project-area.svg" width="" height="" alt="" />
                  </div>
                  <div class="text d-flex align-items-center ps-2">
                    <p class="font-octopus-300 font-18px theme color-gray"><?php the_field('featured_image_area', $p->ID); ?></p>
                  </div>
                </div>
                <div class="price d-flex pb-1">
                  <div class="image">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/ic-project-cost.svg" width="" height="" alt="" />
                  </div>
                  <div class="text d-flex align-items-center ps-2">
                    <p class="font-octopus-300 font-18px theme color-gray"><?php the_field('featured_image_price', $p->ID); ?></p>
                  </div>
                </div>
                <div class="firm d-flex pb-1">
                  <div class="image">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/ic-project-pmc.svg" width="" height="" alt="" />
                  </div>
                  <div class="text d-flex align-items-center ps-2">
                    <p class="font-octopus-300 font-18px theme color-gray"><?php the_field('featured_image_firm_name', $p->ID); ?></p>
                  </div>
                </div>
                <div class="architect d-flex pb-1">
                  <div class="image">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/ic-project-architect.svg" width="" height="" alt="" />
                  </div>
                  <div class="text d-flex align-items-center ps-2">
                    <p class="font-octopus-300 font-18px theme color-gray"><?php the_field('featured_architect_name', $p->ID); ?></p>
                  </div>
                </div>
                <div class="arrow pt-4">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/ic-arrow-grey.svg" width="" height="" alt="" />
                </div>
              </div>
            </div>
            <div class="floating-text position-absolute">
              <p class="font-octopus-500 font-36px theme color-white"><?php echo get_the_title($p->ID); ?></p>
            </div>
          </div>
        </a>
      </div>
    </div>
  <?php
    }
    $i++;
  }
  ?>
    
</div>
<?php
exit;
}
?>