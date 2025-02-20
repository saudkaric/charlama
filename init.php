<?php declare(strict_types=1);

define('DS', DIRECTORY_SEPARATOR);
define('ROOT_DIR', __DIR__);


require_once ROOT_DIR . DS . 'vendor' . DS . 'autoload.php';

require_once ROOT_DIR . DS . 'bootstrap' . DS . 'Application.php';

$app = new Application();

$app->run();