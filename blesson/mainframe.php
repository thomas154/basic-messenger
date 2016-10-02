<html>
<script>
function logfun()
{alert("you have been logged out :)");
window.location="endsesi.php";
}
</script>
<?php
include_once('nav.html');
session_start();
if($_SESSION['name']=='')
	header("location:index.html");
?>
<link rel="stylesheet" type="text/css" href="first.css">
<iframe id="frm1" width="100%" height="10%" src="mainp.php" name="chabox" frameborder=0></iframe>
<iframe id="frm2" width="70%" height="70%" src="et.php" name="conbox" marginheight="20px" marginwidth="20px"></iframe>
<iframe id="frm3" width="10%" height="50%" src="status.php" name="status" frameborder=1></iframe>
<body id="putbkimg" onbeforeunload="logfun()">
<form method="post" action="endsesi.php">
<input id="logbut"type="submit" value="Logout"/>
</form>
<p id="textonline">People Online</p>
</body>
</html>