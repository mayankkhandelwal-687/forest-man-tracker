<html>
<head>
<link rel="stylesheet" type="text/css" href="table.css">


</head>
<body>
<div class="image-div">
<img src="logo.png" alt="SSTPL-IMAGE" height="100" width="100">
<h1>Sehaj Synergy Technologies Pvt. Ltd</h1>
<div class="genu">
<img  src="logonew.png" alt="SSTPL-IMAGE" ALIGN="right" height="100" width="100">
</div>
</div>




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
	
    $sql="select * from SSTPL_UP_Data where address IN('506f980000003450','506f980000003543','506f980000003479','506f98000000349c','506f9800000035ce')";
	$result = mysqli_query($connection,$sql);

?>

	 

            <table>
            <thead>
              <tr>

        					<th>DeviceEUI</th>
        					<th>Gateway Mac Address</th>
        					<th>Time</th>
        					<th>Freq &nbsp; (Hz)</th>
        					<th>Application Name</th>
        					<th>Spreading Factor</th>
        					<th>fcnt</th>
        					<th>RSSI (dBm)</th>
        					<th>SNR</th>
        					
        					<th>Payload(HEX)</th>
                  
        					

               </tr>
            </thead>
		
			            
			
                 
        		     	<?php while($row= $result->fetch_assoc()):?>
							
                            			
                            <tr>
        						<td><?php echo $row['Address'] ?></td>
                                <td><?php echo $row['MAC'] ?></td>
                                <td><?php echo $row['Time'] ?> </td>
                      		    <td><?php echo $row['freq'] ?> </td>
                      			<td><?php echo $row['Modulation'] ?> </td>
                      			<td><?php echo 'SF'.$row['Data_Rate'] ?> </td>
                      			<td><?php echo $row['Code_Rate'] ?> </td>
                      			<td><?php echo $row['RSSI'] ?> </td>
                      			<td><?php echo $row['LORA_SNR'] ?> </td>
                      			<td><?php echo $row['PAYLOAD'] ?> </td>
                                
                            </tr>
                  
        				<?php endwhile ;?>
		</table>
		
		
	




</body>
</html>		