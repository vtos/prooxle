<?php

declare(strict_types=1);

namespace Prooxle\Module\Catalog\Application;

use Prooxle\Module\Catalog\Application\ListCourses\CourseList;
use Prooxle\Module\Catalog\Application\ViewCourse\CourseDetails;
use Prooxle\Module\Catalog\Domain\Model\Courses\CourseId;

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
