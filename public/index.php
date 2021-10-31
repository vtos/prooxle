<?php

require_once '../vendor/autoload.php';

use League\Plates\Engine as Templating;

$templating = new Templating('../templates');
echo $templating->render('courses', [
    'courses' => [
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
    ],
]);
