<?php
namespace App\phpappbuilder\controller;


class Middleware
{
    public $request;
    public $response;
    public $route;
    public $args;

    public function __construct($request, $response, $route, $args){
        $this->request=$request;
        $this->response=$response;
        $this->route=$route;
        $this->args=$args;
    }

    protected function start(){
        $this->execute();
        return true;
    }
}