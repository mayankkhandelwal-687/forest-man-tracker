<html>
<head>
<title>newpage</title>
<link rel="stylesheet" type="text/css" href="newpage.css">
<meta http-equiv="refresh" content="10" >
</head>
<body>

<div class="image-div">
<img src="logo.png" alt="SSTPL-IMG">
<h3>Forest-Man Tracker</h3>
<form action="aalohin.html" method="post">
<input type="button" id="input3" onclick="check(this.form)" value="Logout"/>
</form>

<script language="javascript">
function check(form)/*function to check userid & password*/
{
 /*the following code checkes whether the entered userid and password are matching*/
    window.location.replace("aalohin.html");/*opens the target page while Id & password matches*/
  
}
</script>
</div>

<div class="between-div">

</div>

<div class="main-div">
<div class="first-div">
<div class="abc">
<?php
     
	$servername = "gcp01.siotel.in";
	$username ="globaluser";
	$password ="Alyr!020";
	$databasename ="SSTPL_UPLINK";
	
	$connection = mysqli_connect($servername,$username,$password,$databasename);
	
	if(!$connection)
	{
		die("connection Unsuccessfull:".mysqli_connect_error());
	}
	
     $sql="select address , PAYLOAD from SSTPL_UP_Data where address='506F98000000040C' and LENGTH(PAYLOAD)=50 order by time desc limit 1";
	 $result = mysqli_query($connection,$sql);
	 $rowcount= mysqli_num_rows($result);
	  if($rowcount > 0)
	 {
		 echo "<h1>Device ID</h1>";
	 
	 }
	 
	 
	 ?>
	 <?php while($row= $result->fetch_assoc()):
	 $mac=$row['address'];
	 $payload=$row['PAYLOAD'];
	 $data_to_send=$mac.$payload;
	 
	 ?>
	      
 <h2><a href="http://gcp01.siotel.in/forest-man-tracker/map.php?deveui=<?php echo rawurlencode($data_to_send);?>" target="_blank" data-toggle="tooltip" title="get location of this device"><?php echo $mac;?></a></h2>
			 
			<table ><thead> <tr>
			<th>NA</th>
			<th>NH</th>
			<th id="new_th">SH</th>
			<th>NS</th>
			<th>Ak</th>
			
			
			
			</tr>
			</thead>
			<tr><?php $data1=substr($payload,40,2) ;$data2=substr($payload,42,2); $data3= substr($payload,44,2); $data4= substr($payload,46,2);$data5= substr($payload,48,2);?>
			<td><button id="<?php if($data1=='31')echo "lkm11"; else{echo "lkm22"; } ?>" ></button></td>
			<td><button id="<?php if($data2=='31')echo "lkm33"; else{echo "lkm44"; } ?>"></button></td>
			<td><button id="<?php if($data3=='31')echo "lkm55"; else{echo "lkm66"; } ?>"></button></td>
			<td><button id="<?php if($data4=='31')echo "lkm77"; else{echo "lkm88"; } ?>"></button></td>
			<td><button id="<?php if($data5=='31')echo "lkm99"; else{echo "lkm1010"; } ?>"></button></td>
			
			</tr>
			</table>
			
			<?php endwhile ;?>



<script src="newpage.js"></script>
<script type="text/javascript"> 
var x = '<?php echo $data1; ?>'
var y = '<?php echo $data2; ?>'
var z = '<?php echo $data3; ?>'
var a = '<?php echo $data4; ?>'
var b = '<?php echo $data5; ?>'


if(x==31)
{
	document.getElementById("lkm11").style.backgroundColor="red";
}
else{

	document.getElementById("lkm22").style.backgroundColor="green";
}



if(y==31)
{
	document.getElementById("lkm33").style.backgroundColor="red";
}
else{

document.getElementById("lkm44").style.backgroundColor="green";
}

if(z==31)
{
	document.getElementById("lkm55").style.backgroundColor="red";
}
else{
	document.getElementById("lkm66").style.backgroundColor="green";
}

if(a==31)
{
	document.getElementById("lkm77").style.backgroundColor="red";
}
else{
	document.getElementById("lkm88").style.backgroundColor="green";
}


if(b==31)
{
	document.getElementById("lkm99").style.backgroundColor="red";
}
else{

	document.getElementById("lkm1010").style.backgroundColor="green";

}
</script>

</div>
<div class="abc">

<?php
     
	$servername = "gcp01.siotel.in";
	$username ="globaluser";
	$password ="Alyr!020";
	$databasename ="SSTPL_UPLINK";
	
	$connection = mysqli_connect($servername,$username,$password,$databasename);
	
	if(!$connection)
	{
		die("connection Unsuccessfull:".mysqli_connect_error());
	}
	
     $sql="select address , PAYLOAD from SSTPL_UP_Data where address='506F98000000040D' and LENGTH(PAYLOAD)=50 order by time desc limit 1";
	 $result = mysqli_query($connection,$sql);
	 $rowcount= mysqli_num_rows($result);
	 if($rowcount > 0)
	 {
		 echo "<h1>Device ID</h1>";
	 }
	 
	 ?>
	 <?php while($row= $result->fetch_assoc()):
	 $mac=$row['address'];
	 $payload=$row['PAYLOAD'];
	 $data_to_send=$mac.$payload;
	 
	 ?>
	      
<h2><a href="http://gcp01.siotel.in/forest-man-tracker/map.php?deveui=<?php echo rawurlencode($data_to_send);?>" target="_blank" data-toggle="tooltip" title="get location of this device"><?php echo $mac;?></a></h2>
			 
			 
		
			
			
           			
			<table ><thead> <tr>
			<th>NA</th>
			<th>NH</th>
			<th id="new_th">SH</th>
			<th>NS</th>
			<th>Ak</th>
			
			
			
			</tr>
			</thead>
			<tr><?php $data1=substr($payload,40,2) ;$data2=substr($payload,42,2); $data3= substr($payload,44,2); $data4= substr($payload,46,2);$data5= substr($payload,48,2);?>
			<td><button id="<?php if($data1=='31')echo "lkm1a"; else{echo "lkm2b"; } ?>" ></button></td>
			<td><button id="<?php if($data2=='31')echo "lkm3c"; else{echo "lkm4d"; } ?>"></button></td>
			<td><button id="<?php if($data3=='31')echo "lkm5e"; else{echo "lkm6f"; } ?>"></button></td>
			<td><button id="<?php if($data4=='31')echo "lkm7g"; else{echo "lkm8h"; } ?>"></button></td>
			<td><button id="<?php if($data5=='31')echo "lkm9i"; else{echo "lkm10j"; } ?>"></button></td>
			
			</tr>
			</table>
			
			<?php endwhile ;?>

<script src="newpage.js"></script>
<script type="text/javascript"> 
var x = '<?php echo $data1; ?>'
var y = '<?php echo $data2; ?>'
var z = '<?php echo $data3; ?>'
var a = '<?php echo $data4; ?>'
var b = '<?php echo $data5; ?>'



if(x==31)
{
	document.getElementById("lkm1a").style.backgroundColor="red";
}
else
{
	document.getElementById("lkm2b").style.backgroundColor="green";
}
if(y==31)
{
	document.getElementById("lkm3c").style.backgroundColor="red";
}
else
{
	document.getElementById("lkm4d").style.backgroundColor="green";
}


if(z==31)
{
	document.getElementById("lkm5e").style.backgroundColor="red";
}
else{
	document.getElementById("lkm6f").style.backgroundColor="green";

}

if(a==31)
{
	document.getElementById("lkm7g").style.backgroundColor="red";
}
else{
document.getElementById("lkm8h").style.backgroundColor="green";

}
if(b==31)
{
	document.getElementById("lkm9i").style.backgroundColor="red";
}
else
{
	document.getElementById("lkm10j").style.backgroundColor="green";
}
</script>

</div>
<div class="abc">

<?php
     
	$servername = "gcp01.siotel.in";
	$username ="globaluser";
	$password ="Alyr!020";
	$databasename ="SSTPL_UPLINK";
	
	$connection = mysqli_connect($servername,$username,$password,$databasename);
	
	if(!$connection)
	{
		die("connection Unsuccessfull:".mysqli_connect_error());
	}
	
     $sql="select address , PAYLOAD from SSTPL_UP_Data where address='506F98000000040E' and LENGTH(PAYLOAD)=50 order by time desc limit 1";
	 $result = mysqli_query($connection,$sql);
	 $rowcount= mysqli_num_rows($result);
	 if($rowcount > 0)
	 {
		 echo "<h1>Device ID</h1>";
	 }
	 
	 ?>
	 <?php while($row= $result->fetch_assoc()):
	 $mac=$row['address'];
	 $payload=$row['PAYLOAD'];
	 $data_to_send=$mac.$payload;
	 
	 ?>
	      
<h2><a href="http://gcp01.siotel.in/forest-man-tracker/map.php?deveui=<?php echo rawurlencode($data_to_send);?>" target="_blank" data-toggle="tooltip" title="get location of this device"><?php echo $mac;?></a></h2>
			 
			 
		
			
			
           <table ><thead> <tr>
			<th>NA</th>
			<th>NH</th>
			<th id="new_th">SH</th>
			<th>NS</th>
			<th>Ak</th>
			
			
			
			</tr>
			</thead>
			<tr><?php $data1=substr($payload,40,2) ;$data2=substr($payload,42,2); $data3= substr($payload,44,2); $data4= substr($payload,46,2);$data5= substr($payload,48,2);?>
			<td><button id="<?php if($data1=='31')echo "lkm1k"; else{echo "lkm2l"; } ?>" ></button></td>
			<td><button id="<?php if($data2=='31')echo "lkm3m"; else{echo "lkm4n"; } ?>"></button></td>
			<td><button id="<?php if($data3=='31')echo "lkm5o"; else{echo "lkm6p"; } ?>"></button></td>
			<td><button id="<?php if($data4=='31')echo "lkm7q"; else{echo "lkm8r"; } ?>"></button></td>
			<td><button id="<?php if($data5=='31')echo "lkm9s"; else{echo "lkm10t"; } ?>"></button></td>
			
			</tr>
			</table>
			
			<?php endwhile ;?>

<script src="newpage.js"></script>
<script type="text/javascript"> 
var x = '<?php echo $data1; ?>'
var y = '<?php echo $data2; ?>'
var z = '<?php echo $data3; ?>'
var a = '<?php echo $data4; ?>'
var b = '<?php echo $data5; ?>'

if(x==31)
{
	document.getElementById("lkm1k").style.backgroundColor="red";
}
else{
	
	document.getElementById("lkm2l").style.backgroundColor="green";
	}

if(y==31)
{
	document.getElementById("lkm3m").style.backgroundColor="red";
}
else{
	document.getElementById("lkm4n").style.backgroundColor="green";
}

if(z==31)
{
	document.getElementById("lkm5o").style.backgroundColor="red";
}

else{
document.getElementById("lkm6p").style.backgroundColor="green";
}

if(a==31)
{
	document.getElementById("lkm7q").style.backgroundColor="red";
}
else{
	
	document.getElementById("lkm8r").style.backgroundColor="green";
	}

if(b==31)
{
	document.getElementById("lkm9s").style.backgroundColor="red";
}
else{
	
	document.getElementById("lkm10t").style.backgroundColor="green";

}
</script>
</div>

<div class="abc">
<?php
     
	$servername = "gcp01.siotel.in";
	$username ="globaluser";
	$password ="Alyr!020";
	$databasename ="SSTPL_UPLINK";
	
	$connection = mysqli_connect($servername,$username,$password,$databasename);
	
	if(!$connection)
	{
		die("connection Unsuccessfull:".mysqli_connect_error());
	}
	
     $sql="select address , PAYLOAD from SSTPL_UP_Data where address='506F98000000040F' and LENGTH(PAYLOAD)=50 order by time desc limit 1";
	 $result = mysqli_query($connection,$sql);
	 $rowcount= mysqli_num_rows($result);
	 if($rowcount > 0)
	 {
		 echo "<h1>Device ID</h1>";
	 }
	 
	 ?>
	 <?php while($row= $result->fetch_assoc()):
	 $mac=$row['address'];
	 $payload=$row['PAYLOAD'];
	 $data_to_send=$mac.$payload;
	 
	 ?>
	      
<h2><a href="http://gcp01.siotel.in/forest-man-tracker/map.php?deveui=<?php echo rawurlencode($data_to_send);?>" target="_blank" data-toggle="tooltip" title="get location of this device"><?php echo $mac;?></a></h2>
			 
			 
		
			
			
           			
			<table ><thead> <tr>
			<th>NA</th>
			<th>NH</th>
			<th id="new_th">SH</th>
			<th>NS</th>
			<th>Ak</th>
			
			
			</tr>
			</thead>
			<tr><?php $data1=substr($payload,40,2) ;$data2=substr($payload,42,2); $data3= substr($payload,44,2); $data4= substr($payload,46,2);$data5= substr($payload,48,2);?>
			<td><button id="<?php if($data1=='31')echo "lkmaa"; else{echo "lkmbb"; } ?>" ></button></td>
			<td><button id="<?php if($data2=='31')echo "lkmcc"; else{echo "lkmdd"; } ?>"></button></td>
			<td><button id="<?php if($data3=='31')echo "lkmee"; else{echo "lkmff"; } ?>"></button></td>
			<td><button id="<?php if($data4=='31')echo "lkmgg"; else{echo "lkmhh"; } ?>"></button></td>
			<td><button id="<?php if($data5=='31')echo "lkmii"; else{echo "lkmjj"; } ?>"></button></td>
			
			</tr>
			</table>
			
			<?php endwhile ;?>

<script src="newpage.js"></script>
<script type="text/javascript"> 
var x = '<?php echo $data1; ?>'
var y = '<?php echo $data2; ?>'
var z = '<?php echo $data3; ?>'
var a = '<?php echo $data4; ?>'
var b = '<?php echo $data5; ?>'



if(x==31)
{
	document.getElementById("lkmaa").style.backgroundColor="red";
}
else{
 
 document.getElementById("lkmbb").style.backgroundColor="green";

}

if(y==31)
{
	document.getElementById("lkmcc").style.backgroundColor="red";
}
else
{
	document.getElementById("lkmdd").style.backgroundColor="green";
}

if(z==31)
{
	document.getElementById("lkmee").style.backgroundColor="red";
}
else{
	
	document.getElementById("lkmff").style.backgroundColor="green";
}

if(a==31)
{
	document.getElementById("lkmgg").style.backgroundColor="red";
}
else{
	
	document.getElementById("lkmhh").style.backgroundColor="green";
}


if(b==31)
{
	document.getElementById("lkmii").style.backgroundColor="red";
}
else{
	
	document.getElementById("lkmjj").style.backgroundColor="green";

}
</script>

</div>


<div class="abc">
<?php
     
	$servername = "gcp01.siotel.in";
	$username ="globaluser";
	$password ="Alyr!020";
	$databasename ="SSTPL_UPLINK";
	
	$connection = mysqli_connect($servername,$username,$password,$databasename);
	
	if(!$connection)
	{
		die("connection Unsuccessfull:".mysqli_connect_error());
	}
	
     $sql="select address , PAYLOAD from SSTPL_UP_Data where address='506F980000000410' and LENGTH(PAYLOAD)=50 order by time desc limit 1";
	 $result = mysqli_query($connection,$sql);
	 $rowcount= mysqli_num_rows($result);
	 if($rowcount > 0)
	 {
		 echo "<h1>Device ID</h1>";
	 }
	 
	 ?>
	 <?php while($row= $result->fetch_assoc()):
	 $mac=$row['address'];
	 $payload=$row['PAYLOAD'];
	 $data_to_send=$mac.$payload;
	 
	 ?>
	      
<h2><a href="http://gcp01.siotel.in/forest-man-tracker/map.php?deveui=<?php echo rawurlencode($data_to_send);?>" target="_blank" data-toggle="tooltip" title="get location of this device"><?php echo $mac;?></a></h2>
			 
			 
		
			
           			
			<table ><thead> <tr>
			<th>NA</th>
			<th>NH</th>
			<th id="new_th">SH</th>
			<th>NS</th>
			<th>Ak</th>
			
			
			
			</tr>
			</thead>
			<tr><?php $data1=substr($payload,40,2) ;$data2=substr($payload,42,2); $data3= substr($payload,44,2); $data4= substr($payload,46,2);$data5= substr($payload,48,2);?>
			<td><button id="<?php if($data1=='31')echo "lkmkk"; else{echo "lkmll"; } ?>" ></button></td>
			<td><button id="<?php if($data2=='31')echo "lkmmm"; else{echo "lkmnn"; } ?>"></button></td>
			<td><button id="<?php if($data3=='31')echo "lkmoo"; else{echo "lkmpp"; } ?>"></button></td>
			<td><button id="<?php if($data4=='31')echo "lkmqq"; else{echo "lkmrr"; } ?>"></button></td>
			<td><button id="<?php if($data5=='31')echo "lkmss"; else{echo "lkmtt"; } ?>"></button></td>
			
			</tr>
			</table>
			
			<?php endwhile ;?>

<script src="newpage.js"></script>
<script type="text/javascript"> 
var x = '<?php echo $data1; ?>'
var y = '<?php echo $data2; ?>'
var z = '<?php echo $data3; ?>'
var a = '<?php echo $data4; ?>'
var b = '<?php echo $data5; ?>'



if(x==31)
{
	document.getElementById("lkmkk").style.backgroundColor="red";
}
else{


	document.getElementById("lkmll").style.backgroundColor="green";

}

	

if(y==31)
{
	document.getElementById("lkmmm").style.backgroundColor="red";
}
else{
	document.getElementById("lkmnn").style.backgroundColor="green";
}
if(z==31)
{
	document.getElementById("lkmoo").style.backgroundColor="red";
}
else{
	document.getElementById("lkmpp").style.backgroundColor="green";
}
if(a==31)
{
	document.getElementById("lkmqq").style.backgroundColor="red";
}
else{
	document.getElementById("lkmrr").style.backgroundColor="green";
}

if(b==31)
{
	document.getElementById("lkmss").style.backgroundColor="red";
}
else{
document.getElementById("lkmtt").style.backgroundColor="green";

}
</script>
</div>
</div>
<div class="second-div">
<div class="abc1">

<?php
     
	$servername = "gcp01.siotel.in";
	$username ="globaluser";
	$password ="Alyr!020";
	$databasename ="SSTPL_UPLINK";
	
	$connection = mysqli_connect($servername,$username,$password,$databasename);
	
	if(!$connection)
	{
		die("connection Unsuccessfull:".mysqli_connect_error());
	}
	
     $sql="select address , PAYLOAD from SSTPL_UP_Data where address='506F980000000411' and LENGTH(PAYLOAD)=50 order by time desc limit 1";
	 $result = mysqli_query($connection,$sql);
	 $rowcount= mysqli_num_rows($result);
	 if($rowcount > 0)
	 {
		 echo "<h1>Device ID</h1>";
	 }
	 
	 ?>
	 <?php while($row= $result->fetch_assoc()):
	 $mac=$row['address'];
	 $payload=$row['PAYLOAD'];
	 $data_to_send=$mac.$payload;
	 
	 ?>
	      
<h2><a href="http://gcp01.siotel.in/forest-man-tracker/map.php?deveui=<?php echo rawurlencode($data_to_send);?>" target="_blank" data-toggle="tooltip" title="get location of this device"><?php echo $mac;?></a></h2>
			 
			 
		
			
			
           			
			<table ><thead> <tr>
			<th>NA</th>
			<th>NH</th>
			<th id="new_th">SH</th>
			<th>NS</th>
			<th>Ak</th>
			
			
			
			</tr>
			</thead>
			<tr><?php $data1=substr($payload,40,2) ;$data2=substr($payload,42,2); $data3= substr($payload,44,2); $data4= substr($payload,46,2);$data5= substr($payload,48,2);?>
			<td><button id="<?php if($data1=='31')echo "mhs1a"; else{echo "mhs2b"; } ?>" ></button></td>
			<td><button id="<?php if($data2=='31')echo "mhs3c"; else{echo "mhs4d"; } ?>"></button></td>
			<td><button id="<?php if($data3=='31')echo "mhs5e"; else{echo "mhs6f"; } ?>"></button></td>
			<td><button id="<?php if($data4=='31')echo "mhs7g"; else{echo "mhs8h"; } ?>"></button></td>
			<td><button id="<?php if($data5=='31')echo "mhs9i"; else{echo "mhs10j"; } ?>"></button></td>
			
			</tr>
			</table>
			
			<?php endwhile ;?>

<script src="newpage.js"></script>
<script type="text/javascript"> 
var x = '<?php echo $data1; ?>'
var y = '<?php echo $data2; ?>'
var z = '<?php echo $data3; ?>'
var a = '<?php echo $data4; ?>'
var b = '<?php echo $data5; ?>'


	

if(x==31)
{
	document.getElementById("mhs1a").style.backgroundColor="red";
}
else{
	document.getElementById("mhs2b").style.backgroundColor="green";
}

if(y==31)
{
	document.getElementById("mhs3c").style.backgroundColor="red";
}
else{
	document.getElementById("mhs4d").style.backgroundColor="green";
}
if(z==31)
{
	document.getElementById("mhs5e").style.backgroundColor="red";
}
else{
	
	document.getElementById("mhs6f").style.backgroundColor="green";
}

if(a==31)
{
	document.getElementById("mhs7g").style.backgroundColor="red";
}
else{

	document.getElementById("mhs8h").style.backgroundColor="green";

}
	

if(b==31)
{
	document.getElementById("mhs9i").style.backgroundColor="red";
}
else{
	document.getElementById("mhs10j").style.backgroundColor="green";
}
</script>
</div>

<div class="abc1">
<?php
     
	$servername = "gcp01.siotel.in";
	$username ="globaluser";
	$password ="Alyr!020";
	$databasename ="SSTPL_UPLINK";
	
	$connection = mysqli_connect($servername,$username,$password,$databasename);
	
	if(!$connection)
	{
		die("connection Unsuccessfull:".mysqli_connect_error());
	}
	
     $sql="select address , PAYLOAD from SSTPL_UP_Data where address='506F980000000412' and LENGTH(PAYLOAD)=50 order by time desc limit 1";
	 $result = mysqli_query($connection,$sql);
	 $rowcount= mysqli_num_rows($result);
	 if($rowcount > 0)
	 {
		 echo "<h1>Device ID</h1>";
	 }
	 
	 ?>
	 <?php while($row= $result->fetch_assoc()):
	 $mac=$row['address'];
	 $payload=$row['PAYLOAD'];
	 $data_to_send=$mac.$payload;
	 
	 ?>
	      
<h2><a href="http://gcp01.siotel.in/forest-man-tracker/map.php?deveui=<?php echo rawurlencode($data_to_send);?>" target="_blank" data-toggle="tooltip" title="get location of this device"><?php echo $mac;?></a></h2>
			 
			 
		
			
			
           			
			<table ><thead> <tr>
			<th>NA</th>
			<th>NH</th>
			<th id="new_th">SH</th>
			<th>NS</th>
			<th>Ak</th>
			
			
				
			</tr>
			</thead>
			<tr><?php $data1=substr($payload,40,2) ;$data2=substr($payload,42,2); $data3= substr($payload,44,2); $data4= substr($payload,46,2);$data5= substr($payload,48,2);?>
			<td><button id="<?php if($data1=='31')echo "mhs1k"; else{echo "mhs2l"; } ?>" ></button></td>
			<td><button id="<?php if($data2=='31')echo "mhs3m"; else{echo "mhs4n"; } ?>"></button></td>
			<td><button id="<?php if($data3=='31')echo "mhs5o"; else{echo "mhs6p"; } ?>"></button></td>
			<td><button id="<?php if($data4=='31')echo "mhs7q"; else{echo "mhs8r"; } ?>"></button></td>
			<td><button id="<?php if($data5=='31')echo "mhs9s"; else{echo "mhs10t"; } ?>"></button></td>
			
			</tr>
			</table>
			<?php endwhile ;?>

<script src="newpage.js"></script>
<script type="text/javascript"> 
var x = '<?php echo $data1; ?>'
var y = '<?php echo $data2; ?>'
var z = '<?php echo $data3; ?>'
var a = '<?php echo $data4; ?>'
var b = '<?php echo $data5; ?>'



if(x==31)
{
	document.getElementById("mhs1k").style.backgroundColor="red";
}
else{

	document.getElementById("mhs2l").style.backgroundColor="green";

}
	

if(y==31)
{
	document.getElementById("mhs3m").style.backgroundColor="red";
}
else{
	document.getElementById("mhs4n").style.backgroundColor="green";
}

	

if(z==31)
{
	document.getElementById("mhs5o").style.backgroundColor="red";
}
else{
	
document.getElementById("mhs6p").style.backgroundColor="green";
}

	

if(a==31)
{
	document.getElementById("mhs7q").style.backgroundColor="red";
}
else{
	document.getElementById("mhs8r").style.backgroundColor="green";
}

	

if(b==31)
{
	document.getElementById("mhs9s").style.backgroundColor="red";
}
else{
	document.getElementById("mhs10t").style.backgroundColor="green";
}

</script>
</div>



<div class="abc1">
<?php
     
	$servername = "gcp01.siotel.in";
	$username ="globaluser";
	$password ="Alyr!020";
	$databasename ="SSTPL_UPLINK";
	
	$connection = mysqli_connect($servername,$username,$password,$databasename);
	
	if(!$connection)
	{
		die("connection Unsuccessfull:".mysqli_connect_error());
	}
	
     $sql="select address , PAYLOAD from SSTPL_UP_Data where address='506F980000000413' and LENGTH(PAYLOAD)=50 order by time desc limit 1";
	 $result = mysqli_query($connection,$sql);
	 $rowcount= mysqli_num_rows($result);
	 if($rowcount > 0)
	 {
		 echo "<h1>Device ID</h1>";
	 }
	 
	 ?>
	 <?php while($row= $result->fetch_assoc()):
	 $mac=$row['address'];
	 $payload=$row['PAYLOAD'];
	 $data_to_send=$mac.$payload;
	
	 ?>
	      
<h2><a href="http://gcp01.siotel.in/forest-man-tracker/map.php?deveui=<?php echo rawurlencode($data_to_send);?>" target="_blank" data-toggle="tooltip" title="get location of this device"><?php echo $mac;?></a></h2>
			 
			 
		
			
			
           			
			<table ><thead> <tr>
			<th>NA</th>
			<th>NH</th>
			<th id="new_th">SH</th>
			<th>NS</th>
			<th>Ak</th>
			
			</tr>
			</thead>
			<tr><?php $data1=substr($payload,40,2) ;$data2=substr($payload,42,2); $data3= substr($payload,44,2); $data4= substr($payload,46,2);$data5= substr($payload,48,2);?>
			<td><button id="<?php if($data1=='31')echo "mhsaa"; else{echo "mhsbb"; } ?>" ></button></td>
			<td><button id="<?php if($data2=='31')echo "mhscc"; else{echo "mhsdd"; } ?>"></button></td>
			<td><button id="<?php if($data3=='31')echo "mhsee"; else{echo "mhsff"; } ?>"></button></td>
			<td><button id="<?php if($data4=='31')echo "mhsgg"; else{echo "mhshh"; } ?>"></button></td>
			<td><button id="<?php if($data5=='31')echo "mhsii"; else{echo "mhsjj"; } ?>"></button></td>
			
			</tr>
			</table>
			
			<?php endwhile ;?>

<script src="newpage.js"></script>
<script type="text/javascript"> 
var x = '<?php echo $data1; ?>'
var y = '<?php echo $data2; ?>'
var z = '<?php echo $data3; ?>'
var a = '<?php echo $data4; ?>'
var b = '<?php echo $data5; ?>'


	

if(x==31)
{
	document.getElementById("mhsaa").style.backgroundColor="red";
}
else{
	document.getElementById("mhsbb").style.backgroundColor="green";
}
if(y==31)
{
	document.getElementById("mhscc").style.backgroundColor="red";
}
else{
	
	document.getElementById("mhsdd").style.backgroundColor="green";
}
	

if(z==31)
{
	document.getElementById("mhsee").style.backgroundColor="red";
}
else{
	document.getElementById("mhsff").style.backgroundColor="green";
}
if(a==31)
{
	document.getElementById("mhsgg").style.backgroundColor="red";
}
else{
	document.getElementById("mhshh").style.backgroundColor="green";
}


if(b==31)
{
	document.getElementById("mhsii").style.backgroundColor="red";
}
else{
	
	document.getElementById("mhsjj").style.backgroundColor="green";

}
</script>
</div>
<div class="abc1">
<?php
     
	$servername = "gcp01.siotel.in";
	$username ="globaluser";
	$password ="Alyr!020";
	$databasename ="SSTPL_UPLINK";
	
	$connection = mysqli_connect($servername,$username,$password,$databasename);
	
	if(!$connection)
	{
		die("connection Unsuccessfull:".mysqli_connect_error());
	}
	
     $sql="select address , PAYLOAD from SSTPL_UP_Data where address='506F980000000414' and LENGTH(PAYLOAD)=50 order by time desc limit 1";
	 $result = mysqli_query($connection,$sql);
	 $rowcount= mysqli_num_rows($result);
	 if($rowcount > 0)
	 {
		 echo "<h1>Device ID</h1>";
	 }
	 
	 ?>
	 <?php while($row= $result->fetch_assoc()):
	 $mac=$row['address'];
	 $payload=$row['PAYLOAD'];
	 $data_to_send=$mac.$payload;
	
	 ?>
	      
<h2><a href="http://gcp01.siotel.in/forest-man-tracker/map.php?deveui=<?php echo rawurlencode($data_to_send);?>" target="_blank" data-toggle="tooltip" title="get location of this device"><?php echo $mac;?></a></h2>
			 
			 
		
			
			
           			
			<table ><thead> <tr>
			<th>NA</th>
			<th>NH</th>
			<th id="new_th">SH</th>
			<th>NS</th>
			<th>Ak</th>
			
			
			</tr>
			</thead>
			<tr><?php $data1=substr($payload,40,2) ;$data2=substr($payload,42,2); $data3= substr($payload,44,2); $data4= substr($payload,46,2);$data5= substr($payload,48,2);?>
			<td><button id="<?php if($data1=='31')echo "mhskk"; else{echo "mhsll"; } ?>" ></button></td>
			<td><button id="<?php if($data2=='31')echo "mhsmm"; else{echo "mhsnn"; } ?>"></button></td>
			<td><button id="<?php if($data3=='31')echo "mhsoo"; else{echo "mhspp"; } ?>"></button></td>
			<td><button id="<?php if($data4=='31')echo "mhsqq"; else{echo "mhsrr"; } ?>"></button></td>
			<td><button id="<?php if($data5=='31')echo "mhsss"; else{echo "mhstt"; } ?>"></button></td>
			
			</tr>
			</table>
			
			<?php endwhile ;?>

<script src="newpage.js"></script>
<script type="text/javascript"> 
var x = '<?php echo $data1; ?>'
var y = '<?php echo $data2; ?>'
var z = '<?php echo $data3; ?>'
var a = '<?php echo $data4; ?>'
var b = '<?php echo $data5; ?>'




	

if(x==31)
{
	document.getElementById("mhskk").style.backgroundColor="red";
}
else{
	document.getElementById("mhsll").style.backgroundColor="green";
}

	

if(y==31)
{
	document.getElementById("mhsmm").style.backgroundColor="red";
}
else{
	document.getElementById("mhsnn").style.backgroundColor="green";
}


	

if(z==31)
{
	document.getElementById("mhsoo").style.backgroundColor="red";
}
else{
	
	document.getElementById("mhspp").style.backgroundColor="green";
}
if(a==31)
{
	document.getElementById("mhsqq").style.backgroundColor="red";
}
else{
	
	document.getElementById("mhsrr").style.backgroundColor="green";
}
if(b==31)
{
	document.getElementById("mhsss").style.backgroundColor="red";
}
else{
	
	document.getElementById("mhstt").style.backgroundColor="green";
}
</script>
</div>
<div class="abc1">
<?php
     
	$servername = "gcp01.siotel.in";
	$username ="globaluser";
	$password ="Alyr!020";
	$databasename ="SSTPL_UPLINK";
	
	$connection = mysqli_connect($servername,$username,$password,$databasename);
	
	if(!$connection)
	{
		die("connection Unsuccessfull:".mysqli_connect_error());
	}
	
     $sql="select address , PAYLOAD from SSTPL_UP_Data where address='506F980000000415' and LENGTH(PAYLOAD)=50 order by time desc limit 1";
	 $result = mysqli_query($connection,$sql);
	 $rowcount= mysqli_num_rows($result);
	 if($rowcount > 0)
	 {
		 echo "<h1>Device ID</h1>";
	 }
	 
	 ?>
	 <?php while($row= $result->fetch_assoc()):
	 $mac=$row['address'];
	 $payload=$row['PAYLOAD'];
	 $data_to_send=$mac.$payload;
	
	 ?>
	      
<h2><a href="http://gcp01.siotel.in/forest-man-tracker/map.php?deveui=<?php echo rawurlencode($data_to_send);?>" target="_blank" data-toggle="tooltip" title="get location of this device"><?php echo $mac;?></a></h2>
			 
			 
		
			
			
           			
			<table ><thead> <tr>
			<th>NA</th>
			<th>NH</th>
			<th id="new_th">SH</th>
			<th>NS</th>
			<th>Ak</th>
			
			
			</tr>
			</thead>
			<tr><?php $data1=substr($payload,40,2) ;$data2=substr($payload,42,2); $data3= substr($payload,44,2); $data4= substr($payload,46,2);$data5= substr($payload,48,2);?>
			<td><button id="<?php if($data1=='31')echo "mbvaa"; else{echo "mbvbb"; } ?>" ></button></td>
			<td><button id="<?php if($data2=='31')echo "mbvcc"; else{echo "mbvdd"; } ?>"></button></td>
			<td><button id="<?php if($data3=='31')echo "mbvee"; else{echo "mbvff"; } ?>"></button></td>
			<td><button id="<?php if($data4=='31')echo "mbvgg"; else{echo "mbvhh"; } ?>"></button></td>
			<td><button id="<?php if($data5=='31')echo "mbvii"; else{echo "mbvjj"; } ?>"></button></td>
			
			</tr>
			</table>
			
			<?php endwhile ;?>

<script src="newpage.js"></script>
<script type="text/javascript"> 
var x = '<?php echo $data1; ?>'
var y = '<?php echo $data2; ?>'
var z = '<?php echo $data3; ?>'
var a = '<?php echo $data4; ?>'
var b = '<?php echo $data5; ?>'



	

if(x==31)
{
	document.getElementById("mbvaa").style.backgroundColor="red";
}
else{
	document.getElementById("mbvbb").style.backgroundColor="green";
}

	

if(y==31)
{
	document.getElementById("mbvcc").style.backgroundColor="red";
}
else{
	
	document.getElementById("mbvdd").style.backgroundColor="green";
}

if(z==31)
{
	document.getElementById("mbvee").style.backgroundColor="red";
}
else{
	document.getElementById("mbvff").style.backgroundColor="green";
}

	

if(a==31)
{
	document.getElementById("mbvgg").style.backgroundColor="red";
}
else{
	document.getElementById("mbvhh").style.backgroundColor="green";
}
if(b==31)
{
	document.getElementById("mbvii").style.backgroundColor="red";
}
else{
	
	document.getElementById("mbvjj").style.backgroundColor="green";
}
</script>
</div>
</div>
<div class="last-section">

           <p id="p1">NA  : Naxal Attack</p>
           <p>NH  : Need Help</P>
           <p>SH  : Send Helicopter</p>
           <p>NS  : Naxal Seen Live</P>
           <p>AK  : All Ok</p>

</div>
</div>




</body>
</html>