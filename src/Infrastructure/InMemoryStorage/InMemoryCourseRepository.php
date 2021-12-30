<?php

declare(strict_types=1);

namespace Prooxle\Infrastructure\InMemoryStorage;

use Prooxle\Application\ListCourses\Course;
use Prooxle\Application\ListCourses\CourseList;
use Prooxle\Application\ListCourses\CourseRepository;

final class InMemoryCourseRepository implements CourseRepository
{
    private const COURSES = [
        [
            'name' => 'Course 1',
        ],
        [
            'name' => 'Course 2',
        ],
        [
            'name' => 'Course 3',
        ],
        [
            'name' => 'Course 4',
        ],
        [
            'name' => 'Course 5',
        ],
    ];

    public function getList(): CourseList
    {
        $courses = new CourseList();

        foreach (self::COURSES as $courseAsArray) {
            $courses->add(
                new Course($courseAsArray['name'])
            );
        }

        return $courses;
    }
}
