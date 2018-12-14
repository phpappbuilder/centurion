<?php
use App\phpappbuilder\router\Router;
return (new Router('RouterPrefix'))

    ->get('/', 'TraceController@action',['name'=>'index'])

    ->get('/admin', 'TraceController@action',['name'=>'admin']);
