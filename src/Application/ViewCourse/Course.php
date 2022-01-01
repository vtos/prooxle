<?php

declare(strict_types=1);

namespace Prooxle\Application\ViewCourse;

final class Course
{
    private string $id;

    private string $name;

    private string $summary;

    public function __construct(string $id, string $name, string $summary)
    {
        $this->id = $id;
        $this->name = $name;
        $this->summary = $summary;
    }
}
