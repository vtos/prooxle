<?php
$this->layout('main', [
    'title' => $course['name'],
]);
?>

<div class="course-details-container p-5 mb-4 rounded-3">
    <div class="container-fluid py-5 text-black">
        <h1><?=$course['name']?></h1>
        <p><?=$course['summary']?></p>
    </div>
</div>
