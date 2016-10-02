//this application is live on blesson.orgfree.com
<?php
session_start();
$name=$_SESSION['name'];
$msg=$_POST['msg'];
$dt=date("Y-m-d H:i:s");
$dbc=mysqli_connect('localhost','root','','chatroom') or die("error db");
$sql="INSERT INTO chat(name,time,msg) values('$name','$dt','$msg')" or die("error query");
$result=mysqli_query($dbc,$sql);
$row=mysqli_fetch_array($result);
$_SESSION['id']=$row['id'];
header("location:mainp.php");
?>