<html>
<head>
<title>Movies ticket</title>
<link rel="stylesheet" type="text/css" href="movi.css"> 
<style>
#create-form,#edit-form,#delete-form{
display: none;
} 
</style>
</head>
<body>
<div class="upper-div">
<h2>Movies CRUD</h2>

<?php

	
	$servername = "localhost";
	$username ="root";
	$password ="";
	$databasename ="mayank";
	
	$connection = mysqli_connect($servername,$username,$password,$databasename);
	
	if(!$connection)
	{
		die("connection Unsuccessfull:".mysqli_connect_error());
	}
     $sql="select * from movie_show";
	 $result = mysqli_query($connection,$sql);
	 $rowcount= mysqli_num_rows($result);
	 if($rowcount > 0)
	 {
		 echo "
		 <table>
		    <thead>
			   <tr>
			      <th>ID</th>
				  <th>Title</th>
				  <th>Genric</th>
				  <th>Director</th>
				</tr>
            </thred>
			
			";
	 }
	 
	 ?>
	 <?php while($row= $result->fetch_assoc()):?>
	      <tr>
		     <td><?php echo $row['id']?></td>
			 <td><?php echo $row['movie_name']?></td>
			 <td><?php echo $row['movie_type']?></td>
			 <td><?php echo $row['movie_director']?></td>
			</tr>
			<?php endwhile ;?>
			
			
		</table>
</div>
<div class="button-class">
<button id="create-id">Create new Row</button>
<button id="edit-id">Edit Row</button>
<button id="delete-id">Delete Row</button>


<form action="movie.php" method="post" id="create-form">
<input  type="text"  placeholder="Enter movie Name" name="moviename"><br/>
<input  type="text"  placeholder="Enter movie type" name="movietype"><br/>
<input  type="text"  placeholder="Enter movie Director" name="moviedir"></br>
<input  type="Submit" value="Save" name="lkim">
</form>
<form action="edit.php" method="post" id="edit-form">
<input  type="text"  placeholder="Enter movie Id" name="updateid"><br/>
<input  type="text"  placeholder="Enter movie Name" name="updatename"><br/>
<input  type="text"  placeholder="Enter movie type" name="updatetype"><br/>
<input  type="text"  placeholder="Enter movie Director" name="updatedir"></br>
<input  type="Submit" value="Edit" name="update_edit">
</form>
<form action="delete.php" method="post" id="delete-form">
<input  type="text"  placeholder="Enter movie Id" name="deleteid"><br/>
<input  type="text"  placeholder="Enter movie Name" name="deletename"><br/>
<input  type="Submit" value="Delete" name="delete_edit">
</form>

</div>



<script src="movi.js"></script>

</body>
</html>