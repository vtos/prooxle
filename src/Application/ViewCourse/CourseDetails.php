<?php

declare(strict_types=1);

namespace Prooxle\Application\ViewCourse;

final class CourseDetails
{
    private string $name;

    private string $summary;

    public function __construct(string $name, string $summary)
    {
        $this->name = $name;
        $this->summary = $summary;
    }

    public function asArray(): array
    {
        return [
            'name' => $this->name,
            'summary' => $this->summary,
        ];
    }
}
