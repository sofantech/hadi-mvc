<?php

use elibrary\Http\Route;
use App\controllers\Homecontroller;

Route::get('/',[Homecontroller::class,'index']);
?>