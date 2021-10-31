<?php

require_once '../vendor/autoload.php';

use League\Plates\Engine as Templating;

$templating = new Templating('../templates');
echo $templating->render('courses', [

]);
