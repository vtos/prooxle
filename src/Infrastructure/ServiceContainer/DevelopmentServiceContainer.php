<?php

declare(strict_types=1);

namespace Prooxle\Infrastructure\ServiceContainer;

use Prooxle\Application\ListCourses\CourseRepository;
use Prooxle\Infrastructure\InMemoryStorage\InMemoryCourseRepository;

final class DevelopmentServiceContainer extends AbstractServiceContainer
{
    public function courseRepository(): CourseRepository
    {
        return new InMemoryCourseRepository();
    }
}
