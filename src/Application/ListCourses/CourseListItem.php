<?php

declare(strict_types=1);

namespace Prooxle\Application\ListCourses;

final class CourseListItem
{
    private string $id;

    private string $name;

    public function __construct(string $id, string $name)
    {
        $this->id = $id;
        $this->name = $name;
    }

    public function asArray(): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
        ];
    }
}
