<?php

namespace App\Http;

class Request{

    private $httpMethod;

    private $uri;

    private $queryparams;

    private $postVars = [];

    private $headers = [];

    public function __construct(){
        $this->queryparams  = $_GET ?? [];
        $this->postVars     = $_POST ?? [];
        $this->headers      = getallheaders() ?? [];
        $this->httpMethod   = $_SERVER['REQUEST_METHOD'] ??'';
        $this->uri          = $_SERVER['REQUEST_URI'] ??'';
    }


}


