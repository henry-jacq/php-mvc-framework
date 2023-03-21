<?php

/**
 * Class Request
 * 
 * @author  Henry <henryeditz267@gmail.com>
 * @package app\core
 */

namespace app\core;

class Request
{
    public function getData()
    {

    }

    public function getPath()
    {
        $path = $_SERVER['REQUEST_URI'] ?? '/';
        $position = strpos($path, '?');
        if ($position == false) {
            return $path;
        }
        return substr($path, 0, $position);
    }

    public function getMethod()
    {
        return strtolower($_SERVER['REQUEST_METHOD']);
    }
}