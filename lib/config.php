<?php

define('DS', DIRECTORY_SEPARATOR);
define('DEV_MODE', false);

// ALL PATHS AND URLS END WITH TRAILING SLASH
define('BASE_PATH', str_replace('lib', '', dirname(__FILE__)));
define('LIB_PATH', BASE_PATH . 'lib' . DS);
define('CONTENT_PATH', BASE_PATH . 'pages' . DS);
define('BASE_URL', (DEV_MODE ? 'http://' : 'https://') . $_SERVER['HTTP_HOST'] . DS . '/' . DS);
define('ASSETS_URL', BASE_URL);

$parsedBaseURL = parse_url(BASE_URL);
define('INSTALLATION_DIR', isset($parsedBaseURL['path']) ? rtrim(ltrim($parsedBaseURL['path'], '/'), '/') : '');

define('MYSQL_PAGINATION', 10);

require BASE_PATH . 'vendor/autoload.php';
include LIB_PATH . 'helpers.php';

// Using Medoo namespace
use Medoo\Medoo;
use Cloudinary\Cloudinary;

session_start();

setlocale(LC_MONETARY, 'en_US');
date_default_timezone_set('America/Los_Angeles');

$cloudinary = new Cloudinary([
  'cloud' => [
    'cloud_name' => 'bikievents',
    'api_key'  => '736998832126373',
    'api_secret' => '011FYcRw9a58kygEmjrfmmUrfQc',
  'url' => [
    'secure' => true]]]);

$db = new Medoo([
    'database_type' => 'mysql',
    'database_name' => DEV_MODE ? 'ecoopsmu_invest' : 'm6wbfmqw7zm5l4fl',
    'server' => DEV_MODE ? 'localhost' : 'kutnpvrhom7lki7u.cbetxkdyhwsb.us-east-1.rds.amazonaws.com',
    'username' => DEV_MODE ? 'root' : 'sd5yw3u9bz45li04',
    'password' => DEV_MODE ? 'lekan2020' : 'xsys863ljxa43awi',
    'port' => 3306,
]);
