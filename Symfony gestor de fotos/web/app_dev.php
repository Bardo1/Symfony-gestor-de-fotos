<?php

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Debug\Debug;
use Symfony\Component\Debug\ExceptionHandler;
use Symfony\Component\Debug\ErrorHandler;

$loader = require_once __DIR__.'/../app/bootstrap.php.cache';
ErrorHandler::register();
ExceptionHandler::register();
Debug::enable();

require_once __DIR__.'/../app/AppKernel.php';

$kernel = new AppKernel('dev', true);
$kernel->loadClassCache();
$request = Request::createFromGlobals();
$response = $kernel->handle($request);
$response->send();
$kernel->terminate($request, $response);
