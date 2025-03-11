<?php

declare(strict_types=1);

namespace PHPallas\CMS;

use PHPallas\Buffer\Stock as Buffer;
use PHPallas\Config\Loader as Config;
use PHPallas\HttpKernel\Request;
use PHPallas\HttpKernel\Response;
use PHPallas\Model\Connection;
use PHPallas\Session\Manager as Session;
use PHPallas\Env\Parser as Env;
use PHPallas\Locale\Translator as Locale;

class App
{
    public static function launch (): void
    {
        $buffer = Buffer::getInstance();
        $session = new Session ($buffer);
        $config = new Config("config", $buffer);
        $env = new Env($buffer, ROOT."/.env");
        $dbConnection = new Connection($buffer);
        $lang = $config -> get("app.lang");
        $glossary = include ROOT."/lang/$lang.php";
        $locale = new Locale($buffer, $glossary);
        $request = Request::fromGlobals();
        $buffer -> setObject("request", $request);
        $response = new Response();
        $buffer -> setObject("request", $request);
        $buffer -> setObject("response", $response);
    }
}