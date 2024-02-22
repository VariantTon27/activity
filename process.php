<?php

include("config.php");

if(isset($_POST["registerButton"])){
    $userName = $_POST["username"];
    $password = $_POST["password"];
    $firstName = $_POST["firstName"];
    $middleName = $_POST["middleName"];
    $lastName = $_POST["lastName"];
    $role = $_POST["role"];

    $query ="INSERT INTO user (user_name, password, first_name, middle_name, last_name, role) VALUES ('$userName', '$password', '$firstName', '$middleName', '$lastName', '$role')";
    $query_run = mysqli_query($conn, $query);

    if($query_run){
        echo "Registered Successfully";
    } else {
        echo "Registered Failed";

    }

}