<?php
namespace App\phpappbuilder\router;

use Space\Get as Space;
use Symfony\Component\Routing;
use Symfony\Component\Routing\Matcher\UrlMatcher;
use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\RouteCollection;
use App\phpappbuilder\http\Request;
use App\phpappbuilder\http\Response;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class App
{
    private $collection;

    public function __construct() {
        $this->collection = new RouteCollection();
        $space = Space::Collection('phpappbuilder/router/collection');
        if($space!=NULL && count($space)>0)
        {
            foreach($space as $key => $value)
            {
                $value = require($value);
                $router = $value->run();
                $this->collection->addCollection($router);
            }
        }
    }

    private function mdl(string $string){
        $result = [];
        $data = explode(':', $string);

        $result['middleware']=$data[0];
        $result['args']=[];
        $count = count($result);
        for ($i=1;$i<$count;$i++){
            $result['args'][]=$data[$i];
        }
        return $result;
    }

    public function run() {
        $request = Request::createFromGlobals();
        $context = new RequestContext();
        $context->fromRequest($request);
        $matcher = new UrlMatcher($this->collection, $context);


        $response = new Response();
        try {
            $info = $matcher->match($request->getPathInfo());
            foreach ($info['_middleware'] as $value){
                $mdl = $this->mdl($value);
                $name = $mdl['middleware'];
                $args = $mdl['args'];
                $middleware = new $name($request, $response, $args);
                $middleware->startBefore();
                $request = $middleware->request;
                $response = $middleware->response;
                unset($middleware);
            }

            $controller = $info['_controller'];
            $action = $info['action'];

            $get = new $controller($request, $response, $info);
            $get = $get->$action();

            if (get_class($get) == Response::class){
                $response = $get;
                foreach ($info['_middleware'] as $value){
                    $mdl = $this->mdl($value);
                    $name = $mdl['middleware'];
                    $args = $mdl['args'];
                    $middleware = new $name($request, $response, $args);
                    $middleware->startAfter();
                    $request = $middleware->request;
                    $response = $middleware->response;
                    unset($middleware);
                }
                $get -> send();
            }

        } catch (Routing\Exception\ResourceNotFoundException $exception) {
            $response = Space::Key('phpappbuilder/router/err404');
            $response -> send();
        } catch (Exception $exception) {
            $response = Space::Key('phpappbuilder/router/err500');
            $response -> send();
        }
    }

    static function url(string $route_name , array $args = [] , $absolute = false){
        $collection = new RouteCollection();
        $space = Space::Collection('phpappbuilder/router/collection');
        if($space!=NULL && count($space)>0)
        {
            foreach($space as $key => $value)
            {
                $router = new $value();
                $collection->addCollection($router->__return());
            }
        }
        $context = new RequestContext('');
        $generator = new Routing\Generator\UrlGenerator($collection, $context);
        if (!$absolute){return $generator->generate($route_name, $args);}
        else {return $generator->generate($route_name, $args , UrlGeneratorInterface::ABSOLUTE_URL);}
    }
}