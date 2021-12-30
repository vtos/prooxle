<?php

declare(strict_types=1);

namespace Prooxle\Infrastructure\Web\Controllers;

use Laminas\Diactoros\Response;
use League\Plates\Engine as Templating;
use Prooxle\Application\ListCourses\CourseRepository;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

final class ListCoursesController
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
        $coursesArray = [];
        foreach ($this->courseRepository->getList() as $course) {
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
