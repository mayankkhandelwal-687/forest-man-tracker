<html>
<head><title>User Page</title>
<link rel="stylesheet" type="text/css" href="login.css">
</head>

<body id="lkm">

<div class="image-div">
<img src="logo.png" alt="SSTPL-IMG">
<h3>Sehaj Synergy Technologies Pvt. Ltd.</h3>
</div>

<div class="user-div">
<form action="#" method="get">
<input type="text" id="input1" placeholder="Enter Server Address" name="serveraddress"></br>
<input type="text" id="input2" placeholder="Enter MAC Address" name="MACaddress"></br>
<input type="text" id="input6" placeholder="Enter Port Number" name="portn"></br>
<input type="text" id="input4" placeholder="Enter IP Address" name="ipa"></br>
<input type="text" id="input6" placeholder= "Enter DNS Server" name="dns" ></br>
<input type="radio" id="male" name="gender" value="master">
<label for="master">Master</label><br>
<input type="radio" id="female" name="gender" value="slave">
<label for="slave">Slave</label><br>
<input type="radio" id="othe" name="gender" value="cad">
<label for="cad">CAD</label></br>
<input type="radio" id="other" name="gender" value="backhole">
<label for="backhole">Backhole</label></br>
<input type="submit" id="input5" value="Submit"  name="add">

</form>


<?php
if(isset($_GET['add']))
{	
$serveraddress=$_GET['serveraddress'];
$portnumber=$_GET['portn'];
$IP_Address=$_GET['ipa'];
$DNS_Name=$_GET['dns'];

echo "$serveraddress";
echo "$portnumber";
echo "$IP_Address";
echo "$DNS_Name";
}
?>

</div>
</body>
</html>