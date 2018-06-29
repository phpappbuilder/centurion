<?php

namespace App\my\example;

use App\phpappbuilder\router\RouteCollection;
use App\my\example\TestController;

class Route extends RouteCollection
{
    public function FirstRoute()
        {
            $this->_route = 'sergey/foo.{trans}';
            $this->_controller = TestController::class;
            $this->_action = 'pt';
        }
}