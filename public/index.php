<?php
declare(strict_types=1);

use DivyaShrestha\Framework\Http\Kernel;
use DivyaShrestha\Framework\Http\Request;
//use DivyaShrestha\Framework\Http\Response;

require_once dirname(__DIR__). '/vendor/autoload.php';

// request received
$request = Request::createFromGlobals();

// perform some logic
$kernel = new Kernel();

// send response (string of content
$response = $kernel->handle($request);

$response->send();
