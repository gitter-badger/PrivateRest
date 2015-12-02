<?php

require_once('./includes/rest/RestServer.php');
require_once('./RestController.php');

$server = new \Jacwright\RestServer\RestServer('debug');
$server->addClass('RestController');
$server->handle();
