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
	phpinfo();
	// From version 1.1.0 we decided to use die() to prevent any future errors \\
	die();
}

init();

?>