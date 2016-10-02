<html>
<title>chatroom</title>
<head>
<link rel="stylesheet" type="text/css" href="first.css">
<script>
function formValidate() {
        var x = document.forms["myform"]["msg"].value;
		
		if(/[^?#$@!^:;"',.%*{} ()a-zA-Z0-9]/.test(x))
		{
			alert("some special char are blocked");
			return false;
		}
		if(x.length<2)
			{alert("atleast 2 alphabets required");
			return false;
			}
		if(x[0]==" ")
			{
				alert("space as first letter not allowed");
				return false;
			}
		}
</script>
</head>
<body>
<form method="post" onsubmit="return formValidate()" action="chatapp.php" name="myform">
<div id="send"><input type="submit" value="Go"/></div>
<div id="msg"><input type="text" name="msg" maxlength=65 placeholder="WHAT'S ON YOUR MIND" required/></div>

</form>
</body>
</html>
