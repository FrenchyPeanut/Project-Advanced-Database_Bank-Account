<?php
include("config.php");
session_start();
//if(isset($_SESSION['login']) && $_SESSION['login'] != ''){
if(isset($_SESSION['login'])){
    header ("Location: index.php");
    exit; // stop further executing, very important
}

?>
