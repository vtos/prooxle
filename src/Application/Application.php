<?php

declare(strict_types=1);

namespace Prooxle\Application;

use Prooxle\Application\ListCourses\CourseList;
use Prooxle\Application\ViewCourse\CourseDetails;
use Prooxle\Domain\Model\Courses\CourseId;

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

    public function viewCourseDetails(string $courseId): CourseDetails
    {
        return $this->courseRepository->getCourse(
            CourseId::fromString($courseId)
        );
    }
}
