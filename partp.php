<html>
<head>
	<meta charset="UTF-8">
	<title>disaster management</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
	<div id="header">
		<div>
			<div id="logo">
				<a href="index.php"><span>Disasters</span></a>
			</div>
			<ul id="navigation">
				<li>
					<a href="index.php">Home</a>
				</li>
				<li class="selected">
					<a href="hm.php">disaster</a>
				</li>
				<li><a href="misphotos.php">photos</a></li>
				<li>
					<a href="packages/donate.php">Donate</a>
				</li>
			</ul>
		</div>
	</div>
	<div id="contents">
		<div id="about" class="body">
			<h1>Disaster</h1>
			
				 				<fieldset>
			<legend><h3>Disasters</h3></legend>
			<form method="GET" action="<?php $_PHP_SELF ?>">
				    <?php
require_once('includes/conn.php');

$sql = "SELECT Disaster_id,d_id,location,date_of_incident,number_of_victims,nature FROM di";

$result = mysqli_query($con, $sql); 
$rows = mysqli_num_rows($result);
if ($rows>0){
	echo '<table border="" cellpadding="2" cellspacing="" id="display">';
	echo "<thead class= >";
	echo"<tr>";
	echo "<th >Disasters</th>";
	    echo "<th>Disaster ID</th>";
		echo "<th>Location</th>";
			echo "<th>Date</th>";
			echo "<th>Affected-victims</th>";
			echo "<th>Nature</th>";
			
	echo "</tr>";
	echo"</thead>";
	while ($run=mysqli_fetch_array($result)) {
	

		echo'<tr><td>'.$run['Disaster_id'].'</td><td>'.$run['d_id'].'</td><td>'.$run['location'].'</td><td>'.$run['date_of_incident'].'</td><td>'.$run['number_of_victims'].'</td><td>'.$run['nature'].'</td></tr>';
	}
	

echo "</table>";
}

?>
			
                                 

                     
		</fieldset>
			
			</form>
			
			
			
		</body>
</html>