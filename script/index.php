<?php

require __DIR__ . '/includes/rest/RestServer.php';
require '/controller/RestController.php';

$server = new \Jacwright\RestServer\RestServer('debug');
$server->addClass('RestController');
$server->handle();
