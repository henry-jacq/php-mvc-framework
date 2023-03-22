<?php

/**
 * Class Response
 * 
 * @author  Henry <henryeditz267@gmail.com>
 * @package app\core
 */

namespace app\core;

class Response
{
    public function setStatusCode(int $code)
    {
        http_response_code($code);
    }
}