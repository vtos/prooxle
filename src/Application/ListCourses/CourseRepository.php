<?php

declare(strict_types=1);

namespace Proxle\Application\ListCourses;

interface CourseRepository
{
    public function getList(): CourseList;
}
