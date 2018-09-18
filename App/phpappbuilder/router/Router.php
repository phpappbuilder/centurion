<?php
namespace App\phpappbuilder\router;

use Symfony\Component\Routing\RouteCollection as RC;
use Symfony\Component\Routing\Route as RouteObject;

class Router
{
    public $middleware = []; //проброшенные посредники
    public $router_collection; //объект RouterCollection

    public $router = []; //все роуты здесь
    public $routerGroup = []; //все группы роутов здесь

    public $name_prefix = '';//Префикс имени роута
    public $route_prefix = '';//Префикс всех роутов данной коллекции



    public function __construct(string $router_prefix = NULL){
        $this->router_collection = new RC();
        if ($router_prefix != NULL) { $this->name_prefix = $router_prefix;}
    }

    protected function controller(string $string){
        $string = explode('@', $string);
        if(count($string)==1){
            return ['_controller'=>$string[0], '_action'=>'index'];
        }
        if(count($string)==2){
            return ['_controller'=>$string[0], '_action'=>$string[1]];
        }
    }

    protected function stringToArr($value){
        $result = [];
        if(is_array($value)){
            return $value;
        }
        if(is_string($value)){
            $result[] = $value;
            return $result;
        }
        return [];
    }

    protected function middleware($list){
            $result = []; // здесь будет объединение массивов

            foreach($this->middleware as $val) { // считываем переданных ранее посредников
                $result[] = $val;
            }

            if (count($list)>0){
                foreach($list as $val) { // считываем переданный массив
                    $result[] = $val;
                }
            }
            return array_unique($result);
    }

    /**
     * @param array $params
     *   $this->_route = '';
     *   $this->_controller = '';
     *   $this->_action = '';
     *   $this->requirements = [];
     *   $this->options = [];
     *   $this->host = '';
     *   $this->schemes = [];
     *   $this->methods = [];
     *   $this->condition = '';
     */

    protected function addRoute(string $route, string $controller, array $params = []){
        $this->router[]=[
            'route'=>$route,
            'controller'=>$controller,
            'params'=>$params
        ];
    }

    protected function addCompile (string $route, string $controller, array $params = []){
        $controller = $this->controller($controller);

        $object = new RouteObject($route, [
            '_controller'=>$controller['_controller'],
            '_action'=>['_action'],
            '_middleware'=>$this->middleware($this->stringToArr($params['_middleware']))
        ]);

        if(isset($params['require']) && is_array($params['require'])){
            $object->addRequirements($params['require']);
        }

        if(isset($params['option']) && is_array($params['option'])){
            $object->setOptions($params['option']);
        }

        if(isset($params['host']) && is_string($params['host'])){
            $object->setHost($params['host']);
        }

        if(isset($params['scheme'])){
            $object->setHost($this->stringToArr($params['scheme']));
        }

        if(isset($params['method'])){
            $object->setHost($this->stringToArr($params['method']));
        }

        if(isset($params['condition']) && is_string($params['condition'])){
            $object->setHost($params['condition']);
        }

        if (isset($params['name'])){
            $this->router_collection->add($params['name'], $object);
        }
    }

    protected function addGroup(string $prefix, Router $router, array $params = []){
        $object = $router;
        if(isset($params['middleware'])){
            $middleware = $this->middleware($this->stringToArr($params['middleware']));
        } else {
            $middleware = $this->middleware([]);
        }
        $object->middleware($middleware);
        $object->route_prefix = $prefix;

        $this->routerGroup[] = $object;
    }

    public function get(string $route, string $controller, array $params = []){
        $params['method'] = 'GET';
        $this->addRoute($route, $controller, $params);
        return $this;
    }

    public function post(string $route, string $controller, array $params = []){
        $params['method'] = 'POST';
        $this->addRoute($route, $controller, $params);
        return $this;
    }

    public function put(string $route, string $controller, array $params = []){
        $params['method'] = 'PUT';
        $this->addRoute($route, $controller, $params);
        return $this;
    }

    public function delete(string $route, string $controller, array $params = []){
        $params['method'] = 'DELETE';
        $this->addRoute($route, $controller, $params);
        return $this;
    }

    public function path(string $route, string $controller, array $params = []){
        $params['method'] = 'PATH';
        $this->addRoute($route, $controller, $params);
        return $this;
    }

    public function head(string $route, string $controller, array $params = []){
        $params['method'] = 'HEAD';
        $this->addRoute($route, $controller, $params);
        return $this;
    }

    public function options(string $route, string $controller, array $params = []){
        $params['method'] = 'OPTIONS';
        $this->addRoute($route, $controller, $params);
        return $this;
    }

    public function any(string $route, string $controller, array $params = []){
        return $this;
    }

    public function method($method ,string $route, string $controller, array $params = []){
        $params['method'] = $this->stringToArr($method);
        $this->addRoute($route, $controller, $params);
        return $this;
    }

    public function group(string $prefix, Router $router, array $params = []){
        $this->addGroup($prefix, $router, $params);
        return $this;
    }

    public function run(){
        foreach($this->router as $value){
            $this->addCompile($value['route'], $value['controller'], $value['params']);
        }

        foreach($this->routerGroup as $value){
            $object = $value -> run();
            $this->router_collection->addCollection($object);
        }
        return $this->router_collection;
    }
}