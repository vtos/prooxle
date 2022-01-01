<?php

declare(strict_types=1);

namespace Prooxle\Infrastructure\ServiceContainer;

use League\Plates\Engine as Templating;
use Prooxle\Application\Application;
use Prooxle\Application\ListCourses\CourseRepository as ListCoursesRepository;
use Prooxle\Application\ViewCourse\CourseRepository as ViewCourseRepository;

abstract class AbstractServiceContainer
{
    public function application(): Application
    {
        return new Application();
    }

    public function templating(): Templating
    {
        return new Templating('../templates');
    }

    abstract public function listCoursesRepository(): ListCoursesRepository;

    abstract public function ViewCourseRepository(): ViewCourseRepository;
}
