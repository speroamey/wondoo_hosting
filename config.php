<?php 
return array (
  'security' => 
  array (
    'mode' => 'strict',
    'force_https' => false,
    'session_lifespan' => 7200,
    'perform_session_fingerprinting' => true,
    'debug_fingerprint' => false,
  ),
  'debug_and_monitoring' => 
  array (
    'debug' => true,
    'log_stacktrace' => true,
    'stacktrace_length' => 25,
    'report_errors' => true,
  ),
  'info' => 
  array (
    'salt' => 'f8de9e562c4967022631f9d05f122096',
    'instance_id' => '0e264272-250c-46b8-9b5e-2a70c466e792',
  ),
  'url' => 'http://localhost/',
  'admin_area_prefix' => '/admin',
  'update_branch' => 'release',
  'maintenance_mode' => 
  array (
    'enabled' => false,
    'allowed_urls' => 
    array (
    ),
    'allowed_ips' => 
    array (
    ),
  ),
  'disable_auto_cron' => false,
  'i18n' => 
  array (
    'locale' => 'en_US',
    'timezone' => 'UTC',
    'date_format' => 'medium',
    'time_format' => 'short',
    'datetime_pattern' => '',
  ),
  'path_data' => '/Applications/XAMPP/xamppfiles/htdocs/data',
  'db' => 
  array (
    'type' => 'mysql',
    'host' => 'localhost',
    'port' => '3306',
    'name' => 'hostbilling',
    'user' => 'root',
    'password' => 'admin',
  ),
  'twig' => 
  array (
    'debug' => false,
    'auto_reload' => true,
    'cache' => '/Applications/XAMPP/xamppfiles/htdocs/data/cache',
  ),
  'api' => 
  array (
    'require_referrer_header' => false,
    'allowed_ips' => 
    array (
    ),
    'rate_span' => 3600,
    'rate_limit' => 1000,
    'throttle_delay' => 2,
    'rate_span_login' => 60,
    'rate_limit_login' => 20,
    'CSRFPrevention' => true,
    'rate_limit_whitelist' => 
    array (
    ),
  ),
);