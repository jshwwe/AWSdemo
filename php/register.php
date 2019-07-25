<?php
include 'dbconnect.php';

$user = $_POST["username"];
$pass = $_POST["pass"];
$pass2 = $_POST["pass2"];
$fullname = $_POST["fullname"];

if ($pass != $pass2){
    echo "<script>window.alert('Passwords do not match');"
    . "window.location.href='../register.html'</script>";
    exit;
}

else{
    $db = new mysqli($host,$username,$password,$dbname);
    $sqlinsert = "INSERT INTO users (fullname, username, password) VALUES('" . $fullname . "', '" . $user . "', '" . $pass . "')";
    $dbquery = $db->query($sqlinsert);
    
    if ($dbquery == false){
        echo "<script>window.alert('Username already exists');"
        . "window.location.href='../register.html'</script>";
        exit;
    }
    else{
        echo "<script>window.alert('Account creation successful!');"
        . "window.location.href='../index.html'</script>";
        exit;
    }
}




