<?php

namespace Mage;

/**
 * Theme setup
 */
function setup() {
  // Make theme available for translation
  // Community translations can be found at https://github.com/roots/mage-translations
  load_theme_textdomain('mage', get_template_directory() . '/lang');

  // Enable plugins to manage the document title
  // http://codex.wordpress.org/Function_Reference/add_theme_support#Title_Tag
  add_theme_support('title-tag');

  // Register wp_nav_menu() menus
  // http://codex.wordpress.org/Function_Reference/register_nav_menus
  register_nav_menus([
    'primary_navigation' => __('Primary Navigation', 'mage')
  ]);

  // Enable post thumbnails
  // http://codex.wordpress.org/Post_Thumbnails
  // http://codex.wordpress.org/Function_Reference/set_post_thumbnail_size
  // http://codex.wordpress.org/Function_Reference/add_image_size
  add_theme_support('post-thumbnails');
  add_image_size( 'wide', 1280, 720, true );
  add_image_size( 'square', 600, 600, true );

  // Enable post formats
  // http://codex.wordpress.org/Post_Formats
  add_theme_support('post-formats', ['aside', 'gallery', 'link', 'image', 'quote', 'video', 'audio']);

  // Enable HTML5 markup support
  // http://codex.wordpress.org/Function_Reference/add_theme_support#HTML5
  add_theme_support('html5', ['caption', 'comment-form', 'comment-list', 'gallery', 'search-form']);

  // Add logo support
  add_theme_support( 'custom-logo' );
}
add_action('after_setup_theme', __NAMESPACE__ . '\\setup');

/**
 * Register sidebars
 */
function widgets_init() {
  register_sidebar([
    'name'          => __('Primary', 'mage'),
    'id'            => 'sidebar-primary',
    'before_widget' => '<section class="widget %1$s %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>'
  ]);

  register_sidebar([
    'name'          => __('Footer', 'mage'),
    'id'            => 'sidebar-footer',
    'before_widget' => '<section class="widget %1$s %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>'
  ]);
}
add_action('widgets_init', __NAMESPACE__ . '\\widgets_init');

/**
 * Determine which pages should NOT display the sidebar
 */
function display_sidebar() {
  static $display;

  isset($display) || $display = !in_array(true, [
    // The sidebar will NOT be displayed if ANY of the following return true.
    // @link https://codex.wordpress.org/Conditional_Tags
    is_404(),
    is_front_page(),
    is_page_template('template-custom.php'),
  ]);

  return apply_filters('mage/display_sidebar', $display);
}

/**
 * Theme assets
 */
function assets()
{
	global $mage_version;
	// Enqueue Standard style.css
	wp_enqueue_style(
        'mage',
        get_template_directory_uri() . '/style.css',
        false,
        $mage_version
    );

	// Theme files
    wp_enqueue_style(
        'mage/theme',
        get_template_directory_uri() . '/dist/theme.css',
        false,
        $mage_version
    );

	wp_enqueue_script(
        'mage/theme',
        get_template_directory_uri() . '/dist/theme.js',
        array('jquery'),
        $mage_version,
        true
    );
}
add_action('wp_enqueue_scripts', __NAMESPACE__ . '\\assets', 10);

/**
 * Enqueue Block styles
 */
function block_styles() {
    global $mage_version;

    wp_enqueue_style(
        'mage/blocks',
        get_template_directory_uri() . '/dist/blocks.css',
        ['wp-editor'],
        $mage_version,
        'all'
    );
}
add_action('enqueue_block_assets', __NAMESPACE__ . '\\block_styles', 99);

function editor_assets() {
    global $mage_version;

    // Styles.
	wp_enqueue_style(
		'mage/editor',
		get_template_directory_uri() . '/dist/editor.css',
        array( 'wp-edit-blocks' ),
        $mage_version
	);
}
add_action( 'enqueue_block_editor_assets', __NAMESPACE__ . '\\editor_assets' );