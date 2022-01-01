<?php

declare(strict_types=1);

namespace Prooxle\Domain\Model;

final class CourseId
{
    private string $id;

    public function __construct(string $id)
    {
        $this->id = $id;
    }

    public function asString(): string
    {
        return $this->id;
    }
}
