<?php

require_once('includes/conn.php');

   
	$sql="SELECT Disaster_id FROM di ";
	$result=mysqli_query($con,$sql);
	

	while($row=mysqli_fetch_assoc($result))
	{

	     $idn=$row['Disaster_id'];

	
    
    	echo "<option value='$idn'> $idn </option>";

	}

?>
