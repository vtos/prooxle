<?php

declare(strict_types=1);

namespace Prooxle\Module\Catalog\Infrastructure\Web\Controllers;

use Exception;
use Laminas\Diactoros\Response;
use League\Plates\Engine as Templating;
use Prooxle\Module\Catalog\Application\Application;
use Prooxle\Module\Catalog\Application\ListCourses\CourseListItem;
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

    /**
     * @throws Exception
     */
    public function __invoke(ServerRequestInterface $request): ResponseInterface
    {
        $html = $this->templating->render('courses', [
            'courses' => array_map(
                fn(CourseListItem $course): array => $course->asArray(),
                $this->application->listCourses()->getIterator()->getArrayCopy()
            )
        ]);

        $response = new Response();
        $response->getBody()->write($html);

        return $response;
    }
}
