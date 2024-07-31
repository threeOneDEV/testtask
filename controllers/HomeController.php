<?php

namespace controllers;

use models\Entry;

class HomeController{
    public function index(){
        include('app/views/index.php');
    }
}