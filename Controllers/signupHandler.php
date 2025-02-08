<?php
$login = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include '../model/dbconnect.php';
    $email = $_POST["email"];
    $password = $_POST["password"]; 
    $name = $_POST["name"];
    $phoneNumber = $_POST["phoneNumber"];
    $age = $_POST["age"];
    $gender = $_POST["gender"];
    try{
        $sql = "INSERT INTO `passanger` (`email`, `password`, `name`, `phonenumber`, `age`, `gender`) VALUES ('$email', '$password', '$name', '$phoneNumber', '$age', '$gender') ";
        $result = mysqli_query($conn, $sql);
        header("location: ../views/signup.php");
    }
    catch(Exception $e){
        $showError = "Email already exists";
        echo $showError;
        header( "refresh:5;location: ../views/login.php" );
    }
    

}

    
?>