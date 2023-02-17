<?php
/**
 * Salt for one-time login links, cancel links, form tokens, etc.
 */
$settings['hash_salt'] = '';

/**
 * Access control for update.php script.
 */
$settings['update_free_access'] = FALSE;

/**
 * Load services definition file.
 */
$settings['container_yamls'][] = __DIR__ . '/services.yml';

/**
 * The default list of directories that will be ignored by Drupal's file API.
 *
 * @see file_scan_directory()
 * @see \Drupal\Core\Extension\ExtensionDiscovery::scanDirectory()
 */
$settings['file_scan_ignore_directories'] = [
  'node_modules',
  'bower_components',
];

/**
 * Load local development override configuration, if available.
 * Keep this code block at the end of this file to take full effect.
 */
if (file_exists(__DIR__ . '/settings.local.php')) {
    include __DIR__ . '/settings.local.php';
}

$databases['default']['default'] = array (
  'database' => 'drupal8site',
  'username' => 'root',
  'password' => 'root',
  'prefix' => '',
  'host' => '127.0.0.1',
  'port' => '3306',
  'namespace' => 'Drupal\\Core\\Database\\Driver\\mysql',
  'driver' => 'mysql',
);

$settings['install_profile'] = 'standard';

$config_directories['sync'] = 'sites/default/files/config_/sync';