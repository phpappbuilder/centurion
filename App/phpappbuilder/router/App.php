<?php
namespace App\phpappbuilder\router;

use Space\Get;
use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

class App
{
    static function run()
        {
            $routes = new RouteCollection();
            $space = Get::Collection('phpappbuilder/router/collection');
            if($space!=NULL && count($space)>0)
            {
                foreach($space as $key => $value)
                {
                    $application->add(new $value());
                }
            }
            return $routes;
        }
}