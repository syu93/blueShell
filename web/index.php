<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once __DIR__ . '/../vendor/autoloader.php';

use Sophwork\core\Sophwork;
use Sophwork\app\app\SophworkApp;

$autoloader->config = '/var/www/blueShell/src';

$app = new SophworkApp([
	'baseUrl' => '/blueShell/web',
]);

$app->get('/', ['BlueShell\Shell' => 'shell']);

$app->run();
