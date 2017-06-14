<?php

/**
 * @file
 * Configuration file dev settings.
 */

if (file_exists('../settings/db_settings.php')) {
  include '../settings/db_settings.php';
}
else {
  $databases['default']['default'] = [
    'database' => 'proctoskliniek',
    'username' => 'proctoskliniek',
    'password' => '',
    'prefix' => '',
    'host' => 'localhost',
    'port' => '3306',
    'namespace' => 'Drupal\\Core\\Database\\Driver\\mysql',
    'driver' => 'mysql',
  ];
}

$config_directories = [
  CONFIG_SYNC_DIRECTORY => './../config/sync',
];

$settings['install_profile'] = 'standard';

$settings['hash_salt'] = 'eI7Ag7hMBdRXXcgDIpVv71mxS5mDwZRriHMY05cMjHezL27t-Ch-uCCx6sqU0UIOmGnFuDNW_w';

$settings['update_free_access'] = FALSE;

$settings['file_public_path'] = 'files';
$settings['file_private_path'] = '/var/www/training/private';

$settings['trusted_host_patterns'] = [
  '^training\.dev$',
];

$settings['system.site']['name'] = 'DEV Training';
// Time in seconds, 0 = no caching.
//$settings['system.performance']['cache']['page']['max_age'] = 0;

$settings['system.performance']['cache']['page']['use_internal)'] = FALSE;
$settings['system.performance']['css']['preprocess'] = FALSE;
$settings['system.performance']['js']['preprocess'] = FALSE;
$settings['system.performance']['css']['gzip'] = FALSE;
$settings['system.performance']['js']['gzip'] = FALSE;
$settings['system.performance']['response']['gzip'] = FALSE;

// Max. entries in log, 0 = all entries.
$settings['dblog.settings']['row_limit'] = 1000;
// Time in seconds, 0 = never run.
$settings['system.cron']['threshold']['autorun'] = 0;

$settings['system.file']['path']['temporary'] = '/tmp';
// Time in seconds, 0 = never delete.
$settings['system.file']['temporary_maximum_age'] = 21600;


$settings['file_scan_ignore_directories'] = [
  'node_modules',
  'bower_components',
];

$config['reroute_email.settings']['reroute_email_enable'] = TRUE;
$config['reroute_email.settings']['reroute_email_address'] = 'catchall@limoengroen.nl';
$config['reroute_email.settings']['reroute_email_enable_message'] = TRUE;

if (file_exists(__DIR__ . '/settings.local.php')) {
  include __DIR__ . '/settings.local.php';
}

if (file_exists('../settings/custom_settings.php')) {
  include '../settings/custom_settings.php';
}
$config_directories['sync'] = '/var/www/training/htdocs/profiles/config_installer/config/wizzlern_example';
