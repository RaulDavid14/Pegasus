<?php
    include_once "../models/login_model.php";

    $valid_username = "admin";
    $valid_password = "password";

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($username == $valid_username && $password == $valid_password) 
    {
        header("Location: ../views/inicio.php");
        exit();
    } 
    else 
    {
        echo "<script>document.getElementById('errorAlert').style.display = 'block';</script>";
    }
}
?>