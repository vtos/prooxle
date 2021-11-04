<?php

declare(strict_types=1);

namespace Prooxle\Application\ListCourses;

use ArrayIterator;
use IteratorAggregate;

final class CourseList implements IteratorAggregate
{
    /**
     * @var Course[]
     */
    private array $items = [];

    public function add(Course $item): void
    {
        $this->items[] = $item;
    }

    public function getIterator(): ArrayIterator
    {
        return new ArrayIterator($this);
    }
}
