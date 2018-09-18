<?php
namespace App\phpappbuilder\controller;

use App\phpappbuilder\http\Request;
use App\phpappbuilder\http\Response;

class Middleware
{
    public $request;
    public $response;
    public $args;

    public function __construct(Request $request, Response $response, array $args = []) {
        $this->request=$request;
        $this->response=$response;
        $this->args=$args;
    }

    public function startBefore(){
        if(method_exists($this, 'before')){
            $this->before();
        }
        return true;
    }

    public function startAfter(){
        if(method_exists($this, 'after')){
            $this->after();
        }
        return true;
    }
}