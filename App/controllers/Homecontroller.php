<?php
namespace App\controllers;

use elibrary\view\view;

class Homecontroller{
    public function index(){
        return view::make('home');
    }

}
?>