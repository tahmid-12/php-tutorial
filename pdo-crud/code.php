<?php

    session_start();
    include('connection.php');

    if(isset($_POST['submit'])){
        
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $course = $_POST['course'];

        $query = "INSERT INTO student (Name,Email,Phone,Course) VALUES (:name,:email,:phone,:course)";
        $query_run = $conn->prepare($query);

        $data = [
            ':name' => $name,
            ':email' => $email,
            ':phone' => $phone,
            ':course' => $course
        ];

        $query_execute = $query_run->execute($data);

        if($query_execute){
            $_SESSION['message'] = 'Inserted Successfully';
            header('Location: index.php');
            exit(0);
        }else{
            $_SESSION['message'] = 'Insertion Failed';
            header('Location: index.php');
            exit(0);
        }
    }


?>