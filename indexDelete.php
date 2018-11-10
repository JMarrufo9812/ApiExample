<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require '../../vendor/autoload.php';

$app = new \Slim\App;
$app->delete('/borrar', function (Request $request, Response $response, array $args) {

    $response->getBody()->write("Delete creado");

    return $response;
});
$app->run()

?>