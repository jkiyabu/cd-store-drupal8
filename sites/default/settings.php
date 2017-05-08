<?php

/**
 * Load services definition file.
 */
$settings['container_yamls'][] = __DIR__ . '/services.yml';

/**
 * Include the Pantheon-specific settings file.
 *
 * n.b. The settings.pantheon.php file makes some changes
 *      that affect all envrionments that this site
 *      exists in.  Always include this file, even in
 *      a local development environment, to insure that
 *      the site settings remain consistent.
 */
include __DIR__ . "/settings.pantheon.php";

/**
 * If there is a local settings file, then include it
 */
$local_settings = __DIR__ . "/settings.local.php";
if (file_exists($local_settings)) {
  include $local_settings;
}
$databases['default']['default'] = array (
  'database' => 'cd_database',
  'username' => 'store',
  'password' => 'store',
  'prefix' => '',
  'host' => '127.0.0.1',
  'port' => '8889',
  'namespace' => 'Drupal\\Core\\Database\\Driver\\mysql',
  'driver' => 'mysql',
);
$settings['hash_salt'] = 'KtKWZHTHNHFf_ykYqxaPjBqhLJcc1fVxn4ifaOcE9LgBK-ltppnryzvT-JixC5sHDCzfig5IUQ';
$settings['install_profile'] = 'standard';
