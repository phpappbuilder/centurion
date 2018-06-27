<?php return [
    ["path" => 'collection/phpappbuilder/router/collection' , "name" => 'Test route', "value" => "App/phpappbuilder/router/test.php" ],
    ["path" => 'key/phpappbuilder/router/err404' , "name" => 'Reponse for 404 status', "value" => new Symfony\Component\HttpFoundation\Response('Not Found', 404) ],
    ["path" => 'key/phpappbuilder/router/err500' , "name" => 'Reponse for 500 status', "value" => new Symfony\Component\HttpFoundation\Response('An error occurred', 500) ]
];
