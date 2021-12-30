<?php

declare(strict_types=1);

namespace Prooxle\Infrastructure\Web\Controllers;

use Laminas\Diactoros\Response;
use League\Plates\Engine as Templating;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

final class TrainingCentersInfoController
{
    private Templating $templating;

    public function __construct(Templating $templating)
    {
        $this->templating = $templating;
    }

    public function __invoke(ServerRequestInterface $request): ResponseInterface
    {
        $response = new Response();
        $response->getBody()->write($this->templating->render('training-centers'));

        return $response;
    }
}