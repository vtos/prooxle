<?php

declare(strict_types=1);

namespace Prooxle\Module\Catalog\Infrastructure\InMemoryStorage;

use Prooxle\Module\Catalog\Application\CourseRepository;
use Prooxle\Module\Catalog\Application\ListCourses\CourseList;
use Prooxle\Module\Catalog\Application\ListCourses\CourseListItem;
use Prooxle\Module\Catalog\Application\ViewCourse\CourseDetails;
use Prooxle\Module\Catalog\Domain\Model\Courses\CourseId;

final class InMemoryCourseRepository implements CourseRepository
{
    private const COURSES = [
        [
            'id' => '795642',
            'name' => 'Course 1',
            'summary' => 'Course 1 summary.',
        ],
        [
            'id' => '025845',
            'name' => 'Course 2',
            'summary' => 'Course 2 summary.',
        ],
        [
            'id' => '294178',
            'name' => 'Course 3',
            'summary' => 'Course 3 summary.',
        ],
        [
            'id' => '968001',
            'name' => 'Course 4',
            'summary' => 'Course 4 summary.',
        ],
        [
            'id' => '164458',
            'name' => 'Course 5',
            'summary' => 'Course 5 summary.',
        ],
    ];

    public function getList(): CourseList
    {
        $courses = new CourseList();

        foreach (self::COURSES as $courseAsArray) {
            $courses->add(
                new CourseListItem($courseAsArray['id'], $courseAsArray['name'])
            );
        }

        return $courses;
    }

    public function getCourse(CourseId $id): CourseDetails
    {
        foreach (self::COURSES as $courseAsArray) {
            if ($courseAsArray['id'] === $id->asString()) {
                return new CourseDetails($courseAsArray['name'], $courseAsArray['summary']);
            }
        }

        return new CourseDetails('', '');
    }
}
