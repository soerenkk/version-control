<?php

/*
Config
*/
define('VERSION', 1.1.0);



/*
The app
*/
function init()
{
	// Show visitor its IP address \\
	echo "Your IP is = " . $_SERVER['REMOTE_ADDR'];
	
	phpinfo();
	// From version 1.1.0 we decided to use die() to prevent any future errors \\
	die();
}

init();

?>