<?php

declare(strict_types=1);

namespace Prooxle\Module\Catalog\Infrastructure\Web\Controllers;

use Laminas\Diactoros\Response;
use League\Plates\Engine as Templating;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

final class ContactInfoController
{
    private Templating $templating;

    public function __construct(Templating $templating)
    {
        $this->templating = $templating;
    }

    public function __invoke(ServerRequestInterface $request): ResponseInterface
    {
        $response = new Response();
        $response->getBody()->write($this->templating->render('contact'));

        return $response;
    }
}