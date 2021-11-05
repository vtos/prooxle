<?php

declare(strict_types=1);

namespace Prooxle\Infrastructure\Web\Controllers;

use Laminas\Diactoros\Response;
use League\Plates\Engine as Templating;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

final class ListCoursesController
{
    public function __invoke(ServerRequestInterface $request): ResponseInterface
    {
        $templating = new Templating('../templates');
        $html =  $templating->render('courses', [
            'courses' => [
                [
                    'name' => 'Course 1',
                ],
                [
                    'name' => 'Course 2',
                ],
                [
                    'name' => 'Course 3',
                ],
                [
                    'name' => 'Course 4',
                ],
                [
                    'name' => 'Course 5',
                ],
            ],
        ]);

        $response = new Response();
        $response->getBody()->write($html);

        return $response;
    }
}
