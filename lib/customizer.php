<?php

namespace Mage;

use WP_Customize_Image_Control;

/**
 * Add postMesmage support
 */
function customize_register($wp_customize) {
  $wp_customize->add_setting('upload_site_logo');

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'upload_site_logo', array(
        'label' => 'Logo',
        'section' => 'title_tagline',
        'settings' => 'upload_site_logo',
    )));
}
add_action('customize_register', __NAMESPACE__ . '\\customize_register');