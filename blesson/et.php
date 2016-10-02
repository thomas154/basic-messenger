<html>
<link rel="stylesheet" type="text/css" href="first.css">
<body>
<?php
$dbc=mysqli_connect('localhost','root','','chatroom') or die("error db");
$sql = "SELECT * from chat order by ID desc limit 20";
$result=mysqli_query($dbc,$sql);
while($row = mysqli_fetch_array($result))
{
echo "<div id='name1'>".$row['name'].".</div>"."<div id='msg1'>".$row['msg']."</div>"."<div id='time'>".$row['time']."</div>"."<br>"."<br>";
//echo $row['name']." :  ".$row['msg']."<div id='op'>".$row['time']."</div>"."<br>";
}
header("Refresh: 1; url='et.php'");
?>
</body>
</html>