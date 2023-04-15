<?php
include "vendor/autoload.php";

use App\Student;

$student = new Student;
//update student info
$student_info = $student->edit($_GET['student_id']);
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $student->update($_POST);
}


?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Update student information</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <form class="bg-secondary text-light w-25 p-4" action="" method="post">
        <div class="mb-3">
            <input type="hidden" class="form-control" id="" aria-describedby="" name="id" value="<?= $student_info['id']; ?>">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Student Name</label>
            <input type="text" class="form-control" id="" aria-describedby="" name="name" value="<?= $student_info['name']; ?>">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Student Roll</label>
            <input type="text" class="form-control" id="" aria-describedby="" name="roll" value="<?= $student_info['roll'] ?>">
        </div>
        <button type="submit" name="update_btn" class="btn btn-primary">Update</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>