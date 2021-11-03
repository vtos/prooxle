<?php

declare(strict_types=1);

namespace ProxyLMS\Application\ListCourses;

interface CourseRepository
{
    public function getList(): CourseList;
}
