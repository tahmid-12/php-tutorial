<?php

    require_once('connection.php');

    $query = "SELECT * FROM student";
    $statement = $conn->prepare($query);
    $statement->execute();

    $statement->setFetchMode(PDO::FETCH_ASSOC);
    // $statement->setFetchMode(PDO::FETCH_OBJ);
    $result = $statement->fetchAll();
    // $result = $statement->fetchAll(PDO::FETCH_OBJ);

    // return $result;
    // echo gettype($result);
    // echo $result;
    // echo json_encode($result);
    // print_r($result);
?>