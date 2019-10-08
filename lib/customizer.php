<?php

namespace Mage;

use WP_Customize_Image_Control;

function customize_register($wp_customize) {

}
add_action('customize_register', __NAMESPACE__ . '\\customize_register');