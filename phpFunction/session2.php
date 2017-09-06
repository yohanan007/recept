<?php 
session_start();
$a = $_POST["recherche"];
$_SESSION["recherche"] = $a;
?>
