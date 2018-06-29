<?php
namespace App\phpappbuilder\router;

use App\phpappbuilder\router\Router;
use App\phpappbuilder\controller\Controller;
use \Symfony\Component\HttpFoundation\Response;

class TestController extends Controller
{
    public function pt()
        {
            var_dump($this);
            $this->response->setContent('<html><body><h1>Hello world.'.$this->arg['trans'].'</h1><a href="'.Router::url($this->route , ['trans'=>'sergey']).'">this route</a></body></html>');
            $this->response->setStatusCode(Response::HTTP_OK);
            $this->response->headers->set('Content-Type', 'text/html');
            $this->response->send();
        }
}