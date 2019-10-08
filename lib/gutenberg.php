<?php
/**
 * Include gutenberg functionality here.
 */
namespace Mage;

/**
 * Register theme supports
 *
 * @since 1.0.0
 */
function gutenberg_setup () {
	// Editor color palette
	// https://developer.wordpress.org/block-editor/developers/themes/theme-support/
    add_theme_support( 'editor-color-palette', array(
        array(
            'name' => __( 'Primary', 'mage' ),
            'slug' => 'primary',
            'color' => '#0d6efd',
        ),
        array(
            'name' => __( 'Secondary', 'mage' ),
            'slug' => 'secondary',
            'color' => '#6c757d',
        ),
        array(
            'name' => __( 'Success', 'mage' ),
            'slug' => 'success',
            'color' => '#28a745',
        ),
        array(
            'name' => __( 'Info', 'mage' ),
            'slug' => 'info',
            'color' => '#17a2b8',
        ),
        array(
            'name' => __( 'Warning', 'mage' ),
            'slug' => 'warning',
            'color' => '#ffc107',
        ),
        array(
            'name' => __( 'Danger', 'mage' ),
            'slug' => 'danger',
            'color' => '#dc3545',
        ),
        array(
            'name' => __( 'Light', 'mage' ),
            'slug' => 'light',
            'color' => '#f8f9fa',
        ),
        array(
            'name' => __( 'Dark', 'mage' ),
            'slug' => 'dark',
            'color' => '#343a40',
        ),
        array(
            'name' => __( 'White', 'mage' ),
            'slug' => 'white',
            'color' => '#fff',
        ),
        array(
            'name' => __( 'Black', 'mage' ),
            'slug' => 'black',
            'color' => '#000',
        ),
    ));

    // Uncomment to disable custom colors.
    // add_theme_support( 'disable-custom-colors' );

    // Editor font sizes
	// https://developer.wordpress.org/block-editor/developers/themes/theme-support/
    add_theme_support( 'editor-font-sizes', array(
        array(
            'name' => __( 'Small', 'mage' ),
            'size' => 16,
            'slug' => 'small'
        ),
        array(
            'name' => __( 'Normal', 'mage' ),
            'size' => 18,
            'slug' => 'normal'
        ),
        array(
            'name' => __( 'Medium', 'mage' ),
            'size' => 22,
            'slug' => 'medium'
        ),
        array(
            'name' => __( 'Large', 'mage' ),
            'size' => 36,
            'slug' => 'large'
        ),
        array(
            'name' => __( 'X-Large', 'mage' ),
            'size' => 78,
            'slug' => 'xlarge'
        )
    ) );
}
add_action('after_setup_theme', __NAMESPACE__ . '\\gutenberg_setup', 99);

/**
 * Register basic page template.
 *
 * @since 1.0.0
 */
// function register_page_template() {
//     $post_type_object = get_post_type_object( 'page' );
//     $post_type_object->template = [
//         ['core/paragraph']
//     ];
// }
// add_action( 'init', __NAMESPACE__ . '\\register_page_template');