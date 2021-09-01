<?php

namespace Clean\Foundation\Application;

use Clean\Contracts\Foundation\Application\Response as ResponseContract;

class Response implements ResponseContract
{
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function data()
    {
        return $this->data;
    }
}
