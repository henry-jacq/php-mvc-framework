<?php

/**
 * Class Router
 * 
 * @author  Henry <henryeditz267@gmail.com>
 * @package app\core
 */

namespace app\core;

class Router
{
    public Request $request;
    protected array $routes = [];

    public function __construct(\app\core\Request $request)
    {
        $this->request = $request;
    }
    
    public function get($path, $callback)
    {
        $this->routes['get'][$path] = $callback;
    }

    public function resolve()
    {
        $path = $this->request->getPath();
        $method = $this->request->getMethod();
        echo '<pre>';
        var_dump($path);
        echo '<pre>';
        exit;
    }
}