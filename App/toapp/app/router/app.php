<?php
use App\phpappbuilder\router\Router;
return (new Router('RouterPrefix'))
    ->get('/', 'TraceController@action',['name'=>'TraceRoute'])
    ->post('/', 'TraceController@action',['name'=>'TraceRoute'])
    ->put('/', 'TraceController@action',['name'=>'TraceRoute'])
    ->delete('/', 'TraceController@action',['name'=>'TraceRoute'])
    ->path('/', 'TraceController@action',['name'=>'TraceRoute'])
    ->head('/', 'TraceController@action',['name'=>'TraceRoute'])
    ->options('/', 'TraceController@action',['name'=>'TraceRoute'])
    ->any('/', 'TraceController@action',['name'=>'TraceRoute'])
    ->group('/admin', (new Router())
        ->get('/', 'TraceController@action',['name'=>'TraceRoute'])
        ->post('/', 'TraceController@action',['name'=>'TraceRoute'])
        ->put('/', 'TraceController@action',['name'=>'TraceRoute'])
        ->delete('/', 'TraceController@action',['name'=>'TraceRoute'])
        ->path('/', 'TraceController@action',['name'=>'TraceRoute'])
        ->head('/', 'TraceController@action',['name'=>'TraceRoute'])
        ->options('/', 'TraceController@action',['name'=>'TraceRoute'])
        ->any('/', 'TraceController@action',['name'=>'TraceRoute']),
    ['middleware'=>['auth','basic']])
    ->method(['get', 'post'], '/test', 'controller');