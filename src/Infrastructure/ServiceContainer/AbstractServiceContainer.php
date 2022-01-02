<?php

declare(strict_types=1);

namespace Prooxle\Infrastructure\ServiceContainer;

use League\Plates\Engine as Templating;
use Prooxle\Application\Application;
use Prooxle\Application\ListCourses\CourseRepository as ListCoursesRepository;

abstract class AbstractServiceContainer
{
    public function templating(): Templating
    {
        return new Templating('../templates');
    }

    abstract public function application(): Application;

    abstract public function listCoursesRepository(): ListCoursesRepository;
}
