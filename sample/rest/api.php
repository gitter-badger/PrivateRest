<?php

require_once('./includes/rest/RestServer.php');
require_once("./config.php");
require_once('./RestController.php');

if(is_dir("./install")) {
	echo "<a href='./install/index.php'>Please install the script</a>";
}
else {
	$server = new RestServer('debug');
	$server->addClass('RestController');
	$server->handle();
}

?>
