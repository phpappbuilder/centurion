<?php

return [
    //    ["path" => 'collection/phpappbuilder/router/collection' , "name" => 'Test route', "value" => App\my\example\Route::class ],
    ["path" => 'key/phpappbuilder/router/err404', "name" => 'Reponse for 404 status sergey edition', "value" => new App\phpappbuilder\http\Response('Not Found sergey - edition', 404), "bundle" => ["file" => 'App/my/example/SpaceBundle.php', "position" => 0], "checked" => true],
    ["path" => 'key/phpappbuilder/router/err404', "name" => 'Reponse for 404 status', "value" => new \App\phpappbuilder\http\Response('Not Found', 404), "bundle" => ["file" => 'App/phpappbuilder/router/SpaceBundle.php', "position" => 0]],
];