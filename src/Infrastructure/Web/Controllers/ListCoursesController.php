<?php

declare(strict_types=1);

namespace Prooxle\Infrastructure\Web\Controllers;

use Laminas\Diactoros\Response;
use League\Plates\Engine as Templating;
use Prooxle\Application\Application;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

final class ListCoursesController
{
    private Templating $templating;

    private Application $application;

    public function __construct(Templating $templating, Application $application)
    {
        $this->templating = $templating;
        $this->application = $application;
    }

    public function __invoke(ServerRequestInterface $request): ResponseInterface
    {
        $coursesArray = [];
        foreach ($this->application->listCourses() as $course) {
            $coursesArray[] = [
                'name' => $course->name(),
            ];
        }

        $html = $this->templating->render('courses', [
            'courses' => $coursesArray
        ]);

        $response = new Response();
        $response->getBody()->write($html);

        return $response;
    }
}
