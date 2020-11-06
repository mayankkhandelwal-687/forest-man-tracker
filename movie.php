<?php

function create_record(){
	
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
		echo "connection Successfull";
	}

$moviname=$_POST['moviename'];
$movitype=$_POST['movietype'];
$movidir=$_POST['moviedir'];

$sql= "insert into movie_show(movie_name,movie_type,movie_director) values('$moviname','$movitype','$movidir')";
$insertquery=mysqli_query($connection,$sql);
if($insertquery){
	echo '</br>successfully insert data';
}else{
	echo '</br>not inserted';
}

mysqli_close($connection);

header('location: index.php');

}

if(isset($_POST["lkim"]))
{
create_record();

}


	

?>