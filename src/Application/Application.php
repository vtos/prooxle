<?php

declare(strict_types=1);

namespace ProxyLMS\Application;

use ProxyLMS\Application\ListCourses\CourseList;
use ProxyLMS\Application\ListCourses\CourseRepository;

final class Application
{
    private CourseRepository $courseRepository;

    public function __construct(CourseRepository $courseRepository)
    {
        $this->courseRepository = $courseRepository;
    }

    public function listCourses(): CourseList
    {
        return $this->courseRepository->getList();
    }
}