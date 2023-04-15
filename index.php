<?php

include "vendor/autoload.php";

use App\Student;

$student = new Student;
//read all students data
$students = $student->read();
//delete student
if (isset($_POST['delete_btn'])) {
    $student_id = $_POST['delete_btn'];
    $student->delete($student_id);
}



?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD with php oop and pdo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <a href="create.php" class="btn btn-primary my-5">Add new student</a>
    <table class="table">
        <thead class="bg-primary text-light">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Roll</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $count = 1; ?>
            <?php foreach ($students as $student_info) : ?>
                <tr>
                    <th scope="row"><?= $count++; ?></th>
                    <td><?= $student_info['name']; ?></td>
                    <td><?= $student_info['roll']; ?></td>
                    <td class="d-flex">
                        <a href="update.php?student_id=<?= $student_info['id']; ?>" class="btn btn-warning" name="edit_btn">Edit</a>
                        <form action="" method="POST">
                            <button class="btn btn-danger ms-3" name="delete_btn" type="submit" value="<?= $student_info['id']; ?>">Delete</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>