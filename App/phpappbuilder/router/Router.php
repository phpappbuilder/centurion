<?php
namespace App\phpappbuilder\router;

use Symfony\Component\Routing\RouteCollection as RC;
use Symfony\Component\Routing\Route as RouteObject;

class Router {
    protected $collection;

    protected $middleware = '';
    protected $NamePrefix = '';

    function __construct(string $prefix = '')
    {
        $this->collection = new RC();
        if ($prefix != '') {$this->collection->addNamePrefix($prefix);}

        $this->__before();

        foreach (get_class_methods($this) as $key => $value)
        {
            if ($value!='__construct' && $value!='__collection' && $value!='__after' && $value!='__before' && $value!='__return') {
                $this->_route = '';
                $this->_controller = '';
                $this->_action = '';
                $this->requirements = [];
                $this->options = [];
                $this->host = '';
                $this->schemes = [];
                $this->methods = [];
                $this->condition = '';

                $this->$value();
                $default['_controller'] = $this->_controller;
                if (isset($this->_action) && $this->_action != '') {
                    $default['_action'] = $this->_action;
                }
                $object = new RouteObject($this->_route, $default);
                $object->addRequirements($this->requirements);
                $object->setOptions($this->options);
                $object->setHost($this->host);
                $object->setSchemes($this->schemes);
                $object->setMethods($this->methods);
                $object->setCondition($this->condition);
                $this->collection->add($value, $object);
            }
        }
    }

    protected function

    protected function Controller(string $string){
        $string = explode('@', $string);
        if(count($string)==1){
            return ['_controller'=>$string[0], '_action'=>'index'];
        }
        if(count($string)==2){
            return ['_controller'=>$string[0], '_action'=>$string[1]];
        }
    }


    protected function addMethod($method, $route, $controller, $setting){
        $default = $this->Controller($controller);
        if (isset($setting['middleware'])){$default['middleware']=$setting['middleware'];}
        $object = new RouteObject($route, $default);
        $object->setMethods($method);
        if ()
    }

    public function __before(){

    }

    public function __after(){

    }

    public function __collection()
    {
        if ($this->NamePrefix != '') {$this->collection->addNamePrefix($this->NamePrefix);}
        if ($this->RoutePrefix != '') {$this->collection->addPrefix($this->RoutePrefix);}
    }

    public function __return()
    {
        $this->__after();
        $this->__collection();
        return $this->collection;
    }
}