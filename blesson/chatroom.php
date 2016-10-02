<?php
session_start();
$name=ucfirst($_POST['name']);
$_SESSION['name']=$name;
header("location:mainframe.php");
?>