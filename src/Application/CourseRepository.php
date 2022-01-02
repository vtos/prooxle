<?php

declare(strict_types=1);

namespace Prooxle\Application;

use Prooxle\Application\ListCourses\CourseList;
use Prooxle\Application\ViewCourse\CourseDetails;
use Prooxle\Domain\Model\Courses\CourseId;

interface CourseRepository
{
    public function getList(): CourseList;

    public function getCourse(CourseId $id): CourseDetails;
}
