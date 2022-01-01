<?php

declare(strict_types=1);

require_once '../vendor/autoload.php';

use Laminas\Diactoros\ServerRequestFactory;
use Laminas\HttpHandlerRunner\Emitter\SapiEmitter;
use League\Route\Router;
use Prooxle\Infrastructure\ServiceContainer\DevelopmentServiceContainer;
use Prooxle\Infrastructure\Web\Controllers\ContactInfoController;
use Prooxle\Infrastructure\Web\Controllers\ListCoursesController;
use Prooxle\Infrastructure\Web\Controllers\TrainingCentersInfoController;
use Prooxle\Infrastructure\Web\Controllers\ViewCourseController;

$serviceContainer = new DevelopmentServiceContainer();
$templating = $serviceContainer->templating();

$router = new Router();
$router->map('GET', '/', new ListCoursesController(
    $templating,
    $serviceContainer->listCoursesRepository()
));
$router->map('GET', '/course/{id}', new ViewCourseController(
    $templating,
    $serviceContainer->viewCourseRepository()
));
$router->map('GET', '/training-centers', new TrainingCentersInfoController($templating));
$router->map('GET', '/contact', new ContactInfoController($templating));

$request = ServerRequestFactory::fromGlobals(
    $_SERVER, $_GET, $_POST, $_COOKIE, $_FILES
);

$response = $router->dispatch($request);

(new SapiEmitter())->emit($response);
