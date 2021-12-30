<?php

declare(strict_types=1);

namespace Prooxle\Infrastructure\ServiceContainer;

use League\Plates\Engine as Templating;
use Prooxle\Application\Application;
use Prooxle\Application\ListCourses\CourseRepository;

abstract class AbstractServiceContainer
{
    public function application(): Application
    {
        return new Application(
            $this->courseRepository()
        );
    }

    public function templating(): Templating
    {
        return new Templating('../templates');
    }

    abstract public function courseRepository(): CourseRepository;
}
