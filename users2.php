<?php // query.php
require_once('includes/conn.php');

$sql = "SELECT f_name,m_name,s_name,idno,dob,m_no,constituency,password,type FROM reg_details";

$result = mysqli_query($con, $sql); 
$rows = mysqli_num_rows($result);
if ($rows>0){
	echo '<table border="1" cellpadding="5" cellspacing="5">';
	echo "<thead>";
	echo"<tr>";
	echo "<th>First Name</th>";
		echo "<th>Middle Name</th>";
			echo "<th>surname</th>";
			echo "<th>ID Number</th>";
			echo "<th>Birth Date</th>";
			echo "<th>Mobile Number</th>";
			echo "<th>constituency</th>";
			echo "<th>type</th>";
	echo "</tr>";
	echo"</thead>";
	while ($run=mysqli_fetch_array($result)) {

		echo'<tr><td>'.$run['f_name'].'</td><td>'.$run['m_name'].'</td><td>'.$run['s_name'].'</td><td>'.$run['idno'].'</td><td>'.$run['dob'].'</td><td>'.$run['m_no'].'</td><td>'.$run['constituency'].'</td><td>'.$run['type'].'</td></tr>';
	}

echo "</table>";
}

?>