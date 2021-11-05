<?php

declare(strict_types=1);

require_once '../vendor/autoload.php';

use Laminas\Diactoros\Response;
use Laminas\Diactoros\ServerRequestFactory;
use Laminas\HttpHandlerRunner\Emitter\SapiEmitter;
use League\Plates\Engine as Templating;
use League\Route\Router;
use Prooxle\Infrastructure\Web\Controllers\ListCoursesController;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

$router = new Router();
$router->map('GET', '/', ListCoursesController::class);
$router->map('GET', '/training-centers', function (ServerRequestInterface $request): ResponseInterface {
    $templating = new Templating('../templates');

    $response = new Response();
    $response->getBody()->write($templating->render('training-centers'));

    return $response;

});
$router->map('GET', '/contact', function (ServerRequestInterface $request): ResponseInterface {
    $templating = new Templating('../templates');

    $response = new Response();
    $response->getBody()->write($templating->render('contact'));

    return $response;

});

$request = ServerRequestFactory::fromGlobals(
    $_SERVER, $_GET, $_POST, $_COOKIE, $_FILES
);

$response = $router->dispatch($request);

(new SapiEmitter())->emit($response);
