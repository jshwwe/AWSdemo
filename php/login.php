<?php
include 'dbconnect.php';

$user = $_POST["username"];
$pass = $_POST["pass"];
session_start();

$db = new mysqli($host,$username,$password,$dbname);
$sqlquery = "SELECT * FROM users WHERE username ='". $user . "' and password ='" . $pass . "'";

$result = $db->query($sqlquery);


if ($result != null){
    $row = $result->fetch_assoc();
    
    if ($row == ""){
            echo "<script>window.alert('Invalid username or password');"
        . "window.location.href='../index.html'</script>";
            exit;

    }
    
    $_SESSION["username"] = $user;
    $_SESSION["fullname"] = $row["fullname"];
    header('Location: ../main.php');
    exit;
    
    }
else{
            echo "<script>window.alert('Database Error.');"
        . "window.location.href='../index.html'</script>";
        exit;
}
?>
