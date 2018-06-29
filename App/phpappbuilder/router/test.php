<?php
use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;
use App\phpappbuilder\router\TestController;

$routes = new RouteCollection();
$routes->add(
    'route_name',
    new Route('sergey/foo.{trans}', array('_controller' => TestController::class , '_action' => 'pt') )
);
//$routes->addPrefix('/admin');
// ...

return $routes;