<?php
use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;
use Space\Builder;

$routes = new RouteCollection();
$routes->add(
    'route_name',
    new Route('/foo.{trans}', array('_controller' => Builder::class , '_action' => 'pt'))
);
$routes->addPrefix('/admin');
// ...

return $routes;