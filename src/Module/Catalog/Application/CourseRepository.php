<?php

declare(strict_types=1);

namespace Prooxle\Module\Catalog\Application;

use Prooxle\Module\Catalog\Application\ListCourses\CourseList;
use Prooxle\Module\Catalog\Application\ViewCourse\CourseDetails;
use Prooxle\Module\Catalog\Domain\Model\Courses\CourseId;

interface CourseRepository
{
    public function getList(): CourseList;

    public function getCourse(CourseId $id): CourseDetails;
}
