<?php
/**
 * Mage includes
 *
 * The $mage_includes array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 *
 * Please note that missing files will produce a fatal error.
 *
 * @link https://github.com/roots/mage/pull/1042
 */
$mage_version = '1.0.0';

$mage_includes = [
  'lib/extras.php',    // Custom functions
  'lib/setup.php',     // Theme setup
  'lib/wrapper.php',   // Theme wrapper class
  'lib/customizer.php', // Theme customizer
  'lib/gutenberg.php', // Gutenberg
  'lib/navwalker.php'  // Navwalker
];

foreach ($mage_includes as $file) {
  if (!$filepath = locate_template($file)) {
    trigger_error(sprintf(__('Error locating %s for inclusion', 'mage'), $file), E_USER_ERROR);
  }

  require_once $filepath;
}
unset($file, $filepath);
