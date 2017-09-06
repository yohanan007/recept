<?php
session_start();
$tableNom = $_POST['nomTable'];
$_SESSION['nomTable'] = $tableNom;
?>
