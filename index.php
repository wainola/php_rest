<?php

use \Slim\App;
use \Slim\Http\Request;
use \Slim\Http\Response;

require "vendor/autoload.php";

$app = new App();

// NOTE: configuracion del metodo get asociado a una url
$app->get("/", function(Request $req, Response $res): Response {
   return $res->withJson(["mensaje" => "hola mundo!"]);
});
$app->get('/nombre', function(Request $req, Response $res): Response {
    return $res->withJson(["nombre" => "Nicolas Riquelme"]);
});

// Aceptando parametros en la url
$app->get('/users/{username}',
    function (Request $req, Response $res, array $args):Response {
    $usuario = $req->getAttribute('username');
    return $res->withJson(["mensaje" => "hola " . $args['username']]);
    }
    );

// Testeando encoding de POST request.
// Con esta implementacion podemos por ejemplo insertar datos en una BBDD
$app->post('/users', function(Request $req, Response $res):Response{
    $body = $req->getParsedBody();
    return $res->withJson([
        'data pasada POST' => 'creando usuario ' . $body['username']
    ]);
});

$app->run();