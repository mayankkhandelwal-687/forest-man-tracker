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
	else{
		echo "hellow";
	}
	

$movi_name=$_POST['updatename'];
$movi_type=$_POST['updatetype'];
$movi_dir=$_POST['updatedir'];
$movi_id=$_POST['updateid'];

$sql= "update movie_show set movie_name='$movi_name',movie_type='$movi_type',movie_director='$movi_dir' where id='$movi_id'";	
$updatequery=mysqli_query($connection,$sql);

if(!$updatequery)
{
	echo '</br>not Edit';
	
}else{
	echo '</br>successfully Edit data';
}	
mysqli_close($connection);

header('location: index.php');

}
if(isset($_POST['update_edit']))
{
edit_record();

}
?>