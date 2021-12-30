<?php

declare(strict_types=1);

namespace Prooxle\Infrastructure\Web\Controllers;

use Laminas\Diactoros\Response;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

final class TrainingCentersInfoController extends AbstractHtmlController
{
    public function __invoke(ServerRequestInterface $request): ResponseInterface
    {
        $response = new Response();
        $response->getBody()->write($this->templating->render('training-centers'));

        return $response;
    }
}