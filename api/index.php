<?php

declare(strict_types=1);

$_SERVER['DOCUMENT_ROOT'] = __DIR__ . '/../public';

require __DIR__ . '/../vendor/autoload.php';

$app = require __DIR__ . '/../bootstrap/app.php';

// ✅ Fix for Vercel: writable path
$app->useStoragePath(sys_get_temp_dir());
config(['view.compiled' => sys_get_temp_dir()]);

$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

$request  = Illuminate\Http\Request::capture();
$response = $kernel->handle($request);
$response->send();
$kernel->terminate($request, $response);
