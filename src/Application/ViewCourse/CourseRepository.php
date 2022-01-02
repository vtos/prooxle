<?php

declare(strict_types=1);

namespace Prooxle\Application\ViewCourse;

use Prooxle\Domain\Model\Courses\CourseId;

interface CourseRepository
{
    public function getCourse(CourseId $id): CourseDetails;
}
