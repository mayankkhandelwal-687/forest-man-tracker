<html>
<head><title>Login Page</title>
<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>

<div class="main-div">
<form action="#" method="get">
<input type="text" id="input1" placeholder="Enter User Name" name="first"></br>
<input type="password" id="input2" placeholder="Enter Password" name="second" ></br>
<input type="submit" id="input3" value="Submit"  name="third">
</form>


<?php
if(isset($_GET['third']))
{	
$username=$_GET['first'];
$newlkm=$_GET['second'];


if($username=='user' && $newlkm=="abcd")
{
 header("Location: user.php"); 

}
else if($username=="admin" && $newlkm=="abcd")
{
	header("Location: http://www.google.com"); 
}
else{
	
	echo "<h1 id='h1tag'>Enter Right Username Or Password</h1>";
}
}
?>

</div>
</body>
</html>