<?php

use Dotenv\Parser\Value;

if(!function_exists('env')){
    function env($key,$default=null){
        return $_ENV[$key] ?? value($default);
    }
}
if(!function_exists('value')){
    function value($value){
        return ($value instanceof Closure) ?$value() : $value;
    }
}
if(!function_exists('base_path')){
    function base_path(){
        return dirname(__DIR__).'/../';
    }
}
if(!function_exists('view_path')){
    function view_path(){
        return base_path().'views/';
    }
}