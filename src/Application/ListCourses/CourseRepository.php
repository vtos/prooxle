<?php

declare(strict_types=1);

namespace Prooxle\Application\ListCourses;

interface CourseRepository
{
    public function getList(): CourseList;
}
