<?php
$this->layout('main', [
    'title' => $course['name'],
]);
?>

<div class="breadcrumb-container p-3 mb-2 rounded-3">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="/">Our Courses</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page"><?=$course['name']?></li>
        </ol>
    </nav>
</div>
<div class="course-details-container p-5 mb-4 rounded-3">
    <div class="container-fluid py-5 text-black">
        <h1><?=$course['name']?></h1>
        <p><?=$course['summary']?></p>
    </div>
</div>
