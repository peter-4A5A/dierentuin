<?php
  session_start();
  session_regenerate_id(true);

  define('APP_PATH', __DIR__);
  define('APP_LANG', 'nl');

  ini_set('display_errors', 1);
  error_reporting(E_ALL);

  header('X-Frame-Options: DENY');

  require_once APP_PATH . '/config.php';
  require_once APP_PATH . '/libs/model/Router.class.php';
  require_once APP_PATH . '/libs/functions.php';

  $Router = new Router($GLOBALS['config']['base_url']);
  $Router->set_default_controller('subscription');
  $Router->proces_router();
?>
