<?php
session_start();
session_destroy();
    echo "<script>window.alert('Successfully logged out');"
        . "window.location.href='../index.html'</script>";
        exit;
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

