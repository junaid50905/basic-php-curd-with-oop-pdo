<?php

    namespace App;
    use PDO;

    class Student{
       public $host     = 'localhost';
       public $database = 'oop_crud';
       public $user     = 'root';
       public $password = '';
       public $pdo;

       public function __construct()
       {
            $dsn = "mysql:host=$this->host;dbname=$this->database;charset=UTF8";
            $pdo = new PDO($dsn, $this->user, $this->password);
            if ($pdo) {
                return $this->pdo = $pdo;
            }
       }
       // fetch all rows from table
       public function read()
       {
            $read_sql  = "SELECT * FROM students";
            $statement = $this->pdo->prepare($read_sql);
            $statement->execute();
            $all_students = $statement->fetchAll(PDO::FETCH_ASSOC);
            return $all_students;
       }
       // create new student
       public function create($data)
       {
            $name = $data['name'];
            $roll = $data['roll'];
            $create_sql = "INSERT INTO students (name, roll) VALUES('$name', '$roll')";
            $stm = $this->pdo->prepare($create_sql);
            $stm->execute();
            header("location: index.php");
       }
       //delete student
       public function delete($student_id)
       {
            $delete_sql = "DELETE FROM students WHERE id=$student_id";
            $statement = $this->pdo->prepare($delete_sql);
            $statement->execute();
            header('location: index.php');
       }
       //edit
       public function edit($student_id_for_edit){
          $edit_sql  = "SELECT * FROM students WHERE id=$student_id_for_edit";
          $statement = $this->pdo->prepare($edit_sql);
          $statement->execute();
          $student_info = $statement->fetch(PDO::FETCH_ASSOC);
          return $student_info;
       }
       //update
       public function update($updated_data)
       {
          $update_name = $updated_data['name'];
          $update_roll = $updated_data['roll'];
          $update_id = $updated_data['id'];
          $update_sql = "INSERT INTO students (name, roll) VALUES('$update_name', '$update_roll')";
          $update_sql = "UPDATE students SET name='$update_name', roll='$update_roll' WHERE id=$update_id";
          $stm = $this->pdo->prepare($update_sql);
          $stm->execute();
          header("location: index.php");
       }
    }// end student class