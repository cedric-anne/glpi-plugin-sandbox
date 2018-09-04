<?php
define('PLUGIN_GLPIPLUGINSANDBOX_VERSION', '0.0.1');

/**
 * Init hooks of the plugin.
 *
 * @return void
 */
function plugin_init_glpipluginsandbox() {

   global $PLUGIN_HOOKS;

   if (file_exists(__DIR__.'/vendor/autoload.php')) {
      require_once(__DIR__ . '/vendor/autoload.php');
   }

   $PLUGIN_HOOKS['csrf_compliant']['glpipluginsandbox'] = true;
}


/**
 * Get the name and the version of the plugin.
 *
 * @return array
 */
function plugin_version_glpipluginsandbox() {

   return [
      'name'         => 'GLPI Plugin: Sandbox',
      'version'      => PLUGIN_GLPIPLUGINSANDBOX_VERSION,
      'author'       => 'Cédric Anne',
      'license'      => '',
      'homepage'     => '',
      'requirements' => [
         'glpi' => [
            'min' => '9.3',
         ],
      ],
   ];
}

/**
 * Check pre-requisites before install.
 *
 * @return boolean
 */
function plugin_glpipluginsandbox_check_prerequisites() {

   if (!class_exists('Twig_Parser')) {
      echo 'Unable to find Twig_Parser class.';
      return false;
   }

   return true;
}

/**
 * Check configuration process
 *
 * @param boolean $verbose Whether to display message on failure. Defaults to false.
 * @return boolean
 */
function plugin_glpipluginsandbox_check_config($verbose = false) {

   return true;
}
