<?php

/**
 * class SiteController
 * 
 * @author  Henry <henryeditz267@gmail.com>
 * @package app\controllers
 */ 

namespace app\controllers;

use app\core\Application;

class SiteController
{
    public function home()
    {
        return Application::$app->router->renderView('home');
    }
    public function contact()
    {
        return Application::$app->router->renderView('contact');
    }
    public function handleContact()
    {
        return "Handling Contact Data";
    }
}