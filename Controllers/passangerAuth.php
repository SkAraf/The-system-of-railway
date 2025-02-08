<?php
session_start();
if ($_SESSION['name'] != "admin") {
    $error = 0;
} else {

    header("Location: ./signin.php");
}
?>