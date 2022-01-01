<?php

declare(strict_types=1);

namespace Prooxle\Infrastructure\Web\Controllers;

use Laminas\Diactoros\Response;
use League\Plates\Engine as Templating;
use Prooxle\Application\ViewCourse\CourseRepository;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

final class ViewCourseController
{
    private Templating $templating;

    private CourseRepository $courseRepository;

    public function __construct(Templating $templating, CourseRepository $courseRepository)
    {
        $this->templating = $templating;
        $this->courseRepository = $courseRepository;
    }

    public function __invoke(ServerRequestInterface $request): ResponseInterface
    {
        $html = $this->templating->render('course-view', [

        ]);

        $response = new Response();
        $response->getBody()->write($html);

        return $response;
    }
}
