<?php

declare(strict_types=1);

namespace Prooxle\Module\Catalog\Infrastructure\ServiceContainer;

use Prooxle\Module\Catalog\Application\Application;
use Prooxle\Module\Catalog\Infrastructure\InMemoryStorage\InMemoryCourseRepository;

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
