<?php

declare(strict_types=1);

namespace Prooxle\Infrastructure\ServiceContainer;

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

    abstract public function courseRepository(): CourseRepository;
}
