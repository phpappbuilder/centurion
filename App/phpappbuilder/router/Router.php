<?php
namespace App\phpappbuilder\router;

use Space\Get;
use Symfony\Component\Routing;
use Symfony\Component\Routing\Matcher\UrlMatcher;
use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;


class Router
{
    private $collection;

    public function __construct()
        {
            $this->collection = new RouteCollection();
            $space = Get::Collection('phpappbuilder/router/collection');
            if($space!=NULL && count($space)>0)
            {
                foreach($space as $key => $value)
                {
                    $this->collection->addCollection(require $value);
                }
            }
        }

    public function run()
        {

            $context = new RequestContext('');

            $matcher = new UrlMatcher($this->collection, $context);

            $parameters = $matcher->match('/admin/foo.pre');

            $generator = new Routing\Generator\UrlGenerator($this->collection, $context);

            echo $generator->generate('route_name', ['trans' => 'json'] , UrlGeneratorInterface::ABSOLUTE_URL).' - ';

            return $parameters;
/*
            $request = Request::createFromGlobals();
            $context = new RequestContext();
            $context->fromRequest($request);

            $matcher = new UrlMatcher($this->collection, $context);
            $attributes = $matcher->match($request->getPathInfo());
            return $attribuies;*/
        }

    public function url($route_name , $absolute = false)
        {

        }
}