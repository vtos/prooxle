<?php

declare(strict_types=1);

namespace Application\ListCourses;

interface CourseRepository
{
    public function getList(): CourseList;
}
