<?php

namespace Mage;

use WP_Customize_Image_Control;

/**
 * Add postMesmage support
 */
function customize_register($wp_customize) {
  $wp_customize->add_setting('custom_logo');

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'custom_logo', array(
        'label' => 'Logo',
        'section' => 'title_tagline',
        'settings' => 'custom_logo',
    )));
}
add_action('customize_register', __NAMESPACE__ . '\\customize_register');