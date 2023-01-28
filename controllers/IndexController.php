<?php

namespace Controllers;

use MVC\Router;

class IndexController {

    public static function index(Router $router) {
        $router->render('UI/index', [
            // 'background' => 'bg-gym'
        ]);
    }
    public static function membresias(Router $router) {
        $router->render('UI/membresias', [
            // 'background' => 'bg-gym'
        ]);
    }
}