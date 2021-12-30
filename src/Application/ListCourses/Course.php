<?php

declare(strict_types=1);

namespace Prooxle\Application\ListCourses;

final class Course
{
    private string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function name(): string
    {
        return $this->name;
    }
}
