<html>
<link rel="stylesheet" type="text/css" href="first.css">
<?php
$dbc=mysqli_connect('localhost','root','','chatroom');
$onsq="select name from onstatus";
$result=mysqli_query($dbc,$onsq);
while($row=mysqli_fetch_array($result))
{
echo "<div id='onnames'>".$row['name']."<br>"."</div>";
}
header("Refresh: 1; url='status.php'");
?>
</html>