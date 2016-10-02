<?php
session_start();
$ses=$_SESSION['name'];
$dbc=mysqli_connect('localhost','root','','chatroom');
$query="delete from onstatus where name='$ses'";
mysqli_query($dbc,$query);
unset($_SESSION['name']);
header("location:index.html");
?>