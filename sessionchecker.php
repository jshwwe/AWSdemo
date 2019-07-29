<?php
session_start();

$time = $_SERVER['REQUEST_TIME'];

// 5mins session timeout
$timeout_duration = 300;

if (isset($_SESSION['LAST_ACTIVITY']) && 
   ($time - $_SESSION['LAST_ACTIVITY']) > $timeout_duration) {
    session_unset();
    session_destroy();
    echo "<script>alert('Session has timed out. Please re-log in.');</script>";  
    header('Location: index.html');
}

$_SESSION['LAST_ACTIVITY'] = $time;
// if(!isset($_SESSION['username'])){
//     header('Location: index.html');
//     echo "<script>alert('NO SESSION FOUND!');</script>";
// }
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

