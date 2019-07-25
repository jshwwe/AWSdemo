<?php

session_start();

include 'dbconnect.php';

$bookid = $_GET["bookid"];

$db = new mysqli($host,$username,$password,$dbname);
$sqldelete = "DELETE FROM bookings WHERE bookingid ='" . $bookid ."'";

$db->query($sqldelete);

if ($db){
    echo "<script>window.alert('Successfully canceled!');"
        . "window.location.href='../main.php'</script>";
        exit;
}
else{
        echo "<script>window.alert('Unable to cancel!');"
        . "window.location.href='../mybookings.php'</script>";
        exit;
}