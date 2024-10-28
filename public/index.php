<?php
//require "App/index_old.php";
//require "resources/views/index_old.blade.php";

use Core\App;

// mirar info del php del sistema en phpinfo();

require '../vendor/autoload.php';  //incloem fitxer autoload

require '../Core/bootstrap.php';

App::get('router')->redirect($_SERVER['REQUEST_URI']);

