<?php

$this->layout('main', [
    'title' => 'Our Courses',
]);
?>

<div class="p-5 mt-4 mb-4 bg-white rounded-3">
    <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold text-center">Bring your students to learning!</h1>
        <p class="fs-4">Choose courses, enrol your students, manage their access to the learning content. Set up enrolment plans which suit your organization best. Connect your potential learners to Moodle LMS quickly and comfortably.</p>
    </div>
</div>

<h1 class="mt-5 text-center">Our Courses</h1>
<div class="courses-container row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
    <?php foreach($courses as $course): ?>
        <div class="col">
            <div class="card">
                <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>

                <div class="card-body">
                    <h5 class="card-title"><?=$this->e($course['name'])?></h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <a class="stretched-link" href="/courses/<?=$course['id']?>">View details</a>
                </div>
            </div>
        </div>
    <?php endforeach ?>
</div>
