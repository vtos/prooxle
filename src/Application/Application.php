<?php

declare(strict_types=1);

namespace Application;

use Application\ListCourses\CourseList;
use Application\ListCourses\CourseRepository;

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