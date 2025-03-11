<?php

use PHPallas\Framework\App;

error_reporting(E_ALL);
ini_set('display_errors', '1');

define("ROOT", dirname(__DIR__));
define ("DS", DIRECTORY_SEPARATOR);

require implode(DS,[ROOT,"lib","autoload.php"]);

App::launch();
