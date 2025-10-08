<?php
// Make Laravel think the webroot is /public
$_SERVER['DOCUMENT_ROOT'] = __DIR__ . '/../public';
$_SERVER['SCRIPT_FILENAME'] = __DIR__ . '/../public/index.php';
$_SERVER['SCRIPT_NAME'] = '/index.php';

// Boot the standard Laravel front controller
require __DIR__ . '/../public/index.php';
