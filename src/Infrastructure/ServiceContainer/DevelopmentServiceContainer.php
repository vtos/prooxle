<?php

declare(strict_types=1);

namespace Prooxle\Infrastructure\ServiceContainer;

use Prooxle\Application\Application;
use Prooxle\Infrastructure\InMemoryStorage\InMemoryCourseRepository;

final class DevelopmentServiceContainer extends AbstractServiceContainer
{
    private InMemoryCourseRepository $courseRepository;

    public function application(): Application
    {
        return new Application(
            $this->courseRepository ?? $this->courseRepository = new InMemoryCourseRepository()
        );
    }
}
