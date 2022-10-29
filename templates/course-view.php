<?php
$this->layout('main', [
    'title' => $course['name'],
]);
?>

<div class="p-5 mt-4 mb-4 bg-white rounded-3">
    <div class="container-fluid py-5 text-black">
        <h1><?=$course['name']?></h1>
        <p><?=$course['summary']?></p>
    </div>
    <div>
        <a href="/">Back to courses</a>
    </div>
</div>
