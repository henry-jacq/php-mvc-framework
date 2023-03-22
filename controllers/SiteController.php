<?php

/**
 * class SiteController
 * 
 * @author  Henry <henryeditz267@gmail.com>
 * @package app\controllers
 */ 

namespace app\controllers;

use app\core\Application;
use app\core\Controller;
use app\core\Request;

class SiteController extends Controller
{
    public function home()
    {
        $params = [
            'name' => "Henry"
        ];
        return $this->render('home', $params);
    }
    public function contact()
    {
        return Application::$app->router->renderView('contact');
    }
    public function handleContact(Request $request)
    {
        $body = $request->getBody();
        
        return "Handling Contact Data";
    }
}