<?php

use PHPallas\Framework\App;

error_reporting(error_level: E_ALL);
ini_set(option: 'display_errors', value: '1');

define(constant_name: "ROOT", value: dirname(__DIR__));
define(constant_name: "DS", value: DIRECTORY_SEPARATOR);

require implode(separator: DS, array: [ROOT, "lib", "autoload.php"]);

$app = new App("http");
$app->launch();