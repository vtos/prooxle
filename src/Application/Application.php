<?php

declare(strict_types=1);

namespace Prooxle\Application;

use Prooxle\Application\ViewCourse\CourseDetails;
use Prooxle\Application\ViewCourse\CourseRepository;
use Prooxle\Domain\Model\Courses\CourseId;

final class Application
{
    private CourseRepository $courseRepository;

    public function __construct(CourseRepository $courseRepository)
    {
        $this->courseRepository = $courseRepository;
    }

    public function viewCourse(string $courseId): CourseDetails
    {
        return $this->courseRepository->getCourse(
            CourseId::fromString($courseId)
        );
    }
}
