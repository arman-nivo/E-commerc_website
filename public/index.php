<?php

use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

// Maintenance mode check
if (file_exists($maintenance = __DIR__ . '../../storage/framework/maintenance.php')) {
    require $maintenance;
}

// Autoload Composer dependencies
require __DIR__ . '../../vendor/autoload.php';

// Bootstrap the application
$app = require_once __DIR__ . '../../bootstrap/app.php';

// Run the HTTP kernel
$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

$response = $kernel->handle(
    $request = Request::capture()
);

$response->send();

$kernel->terminate($request, $response);
