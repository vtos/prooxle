<?php

declare(strict_types=1);

namespace Prooxle\Module\Catalog\Infrastructure\Web\Controllers;

use Laminas\Diactoros\Response;
use League\Plates\Engine as Templating;
use Prooxle\Module\Catalog\Application\Application;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

final class ViewCourseController
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
        $courseDetails = $this->application->viewCourseDetails($request->getAttribute('id') ?? '');

        $html = $this->templating->render('course-view', [
            'course' => $courseDetails->asArray(),
        ]);

        $response = new Response();
        $response->getBody()->write($html);

        return $response;
    }
}
