<?php

namespace App\phpappbuilder\router;

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route as RouteObject;
use App\phpappbuilder\router\TestController;

class Route
{
    public $collection;
    public $prefix = '';
    protected $_route;
    protected $_controller;
    protected $_action;
    protected $requirements;
    protected $options;
    protected $host;
    protected $schemes;
    protected $methods;
    protected $condition;

    function __construct()
    {
        $this->collection = new RouteCollection();
        foreach (get_class_methods($this) as $key => $value)
            {
                $this -> _route = '';
                $this -> _controller = '';
                $this -> _action = '';
                $this -> requirements = [];
                $this -> options = [];
                $this -> host = '';
                $this -> schemes = [];
                $this -> methods = [];
                $this -> condition = '';

                $this -> $value();
                $default['_controller'] = $this->_controller;
                if (isset($this->_action) && $this->_action!='') {$default['_action'] = $this->_action;}
                $object = new RouteObject($this->_route, $default);
                $object->addRequirements($this->requirements);
                $object->setOptions($this->options);
                $object->setHost($this->host);
                $object->setSchemes($this->schemes);
                $object->setMethods($this->methods);
                $object->setCondition($this->condition);
                $this->collection->add($value , $object);
            }
    }
}