<?php
function edit_record(){
    $servername = "localhost";
	$username ="root";
	$password ="";
	$databasename ="mayank";
	
	$connection = mysqli_connect($servername,$username,$password,$databasename);
	
	if(!$connection)
	{
		die("connection Unsuccessfull:".mysqli_connect_error());
	}
	

$movi_name=$_POST['deletename'];

$movi_id=$_POST['deleteid'];

$sql= "delete from  movie_show where movie_name='$movi_name' and id='$movi_id'";	
$deletequery=mysqli_query($connection,$sql);

if(!$deletequery)
{
	echo '</br>not delete';
	
}else{
	echo '</br>successfully delete data';
}	
mysqli_close($connection);

header('location: index.php');

}
if(isset($_POST['delete_edit']))
{
edit_record();

}
?>