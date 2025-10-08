<?php

declare(strict_types=1);

$_SERVER['DOCUMENT_ROOT'] = __DIR__ . '/../public';

require __DIR__ . '/../vendor/autoload.php';

$app = require __DIR__ . '/../bootstrap/app.php';

/**
 * Vercel: point storage & view compiled cache to /tmp (writable).
 * Do NOT call config() here (container not bootstrapped yet).
 */
$app->useStoragePath(sys_get_temp_dir());
$_ENV['VIEW_COMPILED_PATH']   = sys_get_temp_dir();
$_SERVER['VIEW_COMPILED_PATH'] = sys_get_temp_dir();

$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

$request  = Illuminate\Http\Request::capture();
$response = $kernel->handle($request);
$response->send();
$kernel->terminate($request, $response);
