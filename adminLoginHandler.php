<?php
$login = false;
$showError = false;

if($_SERVER["REQUEST_METHOD"] == "POST"){
    include '../model/dbconnect.php';
    $email = $_POST["email"];
    $password = $_POST["password"]; 
    echo $email," ",$password;
    $sql = "Select email,password from technical_supervision where email='$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if ($num == 1){
        $login = true;
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['email'] = $email;
        $_SESSION['name'] = $name;
        header("location: ../views/index.php");

    } 
    else{
        $showError = "Invalid Credentials";
        echo $showError;
    }
}

    
?>