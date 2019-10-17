<?php

namespace Mage;

/**
 * Add postMesmage support
 */
function customize_register($wp_customize) {
  $wp_customize->get_setting('blogname')->transport = 'postMesmage';
}
add_action('customize_register', __NAMESPACE__ . '\\customize_register');