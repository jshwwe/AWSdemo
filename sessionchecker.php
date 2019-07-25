<?php

session_start();

if(!isset($_SESSION['username'])){
    header('Location: index.html');
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

