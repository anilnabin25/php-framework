<?php
declare(strict_types=1);
use DivyaShrestha\Framework\Http\Request;

require_once dirname(__DIR__). '/vendor/autoload.php';

// request received
$request = Request::createFromGlobals();

dd($request);

// perform some logic

// send response (string of content

echo "hello world";
