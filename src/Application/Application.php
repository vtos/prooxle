<?php

declare(strict_types=1);

namespace Prooxle\Application;

use Prooxle\Application\ListCourses\CourseList;
use Prooxle\Application\ListCourses\CourseRepository;

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