<?php

session_start();
include 'dbconnect.php';

$venue = $_POST["venue"];
$activity = $_POST["activity"];
$date = $_POST["date"];
$time = $_POST["time"];
$user = $_SESSION["username"];

if ($activity == ""){
     echo "<script>window.alert('Failed to make booking');"
        . "window.location.href='../book.php'</script>";
        exit;
}

$db = new mysqli($host,$username,$password,$dbname);
$sqlinsert = "INSERT INTO bookings (activity, venue, time, date, user) VALUES ('" . $activity . "', '" . $venue . "', '" . $time . "', '" . $date . "', '" . $user . "')";

$dbquery = $db->query($sqlinsert);

   if ($dbquery == false){
       
       echo "<script>window.alert('Failed to make booking');"
        . "window.location.href='../main.php'</script>";
        exit;
    }
    else{
        echo "<script>window.alert('Successfully made booking!');"
        . "window.location.href='../main.php'</script>";
        exit;
    }

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

