<?php

namespace App\Base;

use App\Base\Traits\ApiResponse;

class Response
{
    use ApiResponse;

    protected $config;

    public function __construct($config)
    {
        $this->config = $config;
    }

}