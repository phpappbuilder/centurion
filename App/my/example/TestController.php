<?php
namespace App\my\example;

use App\phpappbuilder\router\Router;
use App\phpappbuilder\controller\Controller;
use \Symfony\Component\HttpFoundation\Response;
use App\phpappbuilder\template\Template;
use App\my\example\MyTemplate;

class TestController extends Controller
{
    public function pt()
        {
           // print_r('hello');
            $template = new Template( NewTemplate::class );

            $this->response->setContent($template->render('menu',[
                'items' => [
                    ['href'=>'https://google.com/' , 'title'=>'Я тебя куплю'],
                    ['href'=>'https://google.com/' , 'title'=>'Я тебя kek'],
                    ['href'=>'https://google.com/' , 'title'=>'Я тебя pipipi']
                ]
            ]));
            //$this->response->setContent('<html><body><h1>Hello world.'.$this->arg['trans'].'</h1><a href="'.Router::url($this->route , ['trans'=>'sergey']).'">this route - '.$this->route.'</a></body></html>'.);
            $this->response->setStatusCode(Response::HTTP_OK);
            $this->response->headers->set('Content-Type', 'text/html');
            $this->response->send();

        }
}