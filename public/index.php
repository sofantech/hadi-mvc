<?php

use elibrary\Http\Request;
use elibrary\Http\Response;
use elibrary\Http\Route;
require_once __DIR__.'/../src/support/helpers.php';
require_once base_path(). 'vendor/autoload.php';
require_once base_path(). 'routes/web.php';
$route=new Route(new Request,new Response);
$route->resolve();
// var_dump(base_path())
?>