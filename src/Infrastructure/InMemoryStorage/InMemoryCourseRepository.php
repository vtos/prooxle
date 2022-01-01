<?php

declare(strict_types=1);

namespace Prooxle\Infrastructure\InMemoryStorage;

use Prooxle\Application\ListCourses\Course;
use Prooxle\Application\ListCourses\CourseList;
use Prooxle\Application\ListCourses\CourseRepository;
use Prooxle\Application\ViewCourse\Course as ViewCourse;

final class InMemoryCourseRepository implements CourseRepository
{
    private const COURSES = [
        [
            'id' => '795642',
            'name' => 'Course 1',
        ],
        [
            'id' => '025845',
            'name' => 'Course 2',
        ],
        [
            'id' => '294178',
            'name' => 'Course 3',
        ],
        [
            'id' => '968001',
            'name' => 'Course 4',
        ],
        [
            'id' => '164458',
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

    public function getCourse(): ViewCourse
    {
        return new ViewCourse(
            '478484',
            'Course 1',
            ''
        );
    }
}
