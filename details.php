			    <?php
require_once('includes/conn.php');
if(isset($_POST['dis_id'])){

$di=$_POST['dis_id'];
$sql = "SELECT * FROM donations WHERE d_id='$di'";

$result = mysqli_query($con, $sql); 
$rows = mysqli_num_rows($result);
if ($rows>0){
	echo '<table border="1" cellpadding="2" cellspacing="2">';
	echo "<thead>";
	echo"<tr>";
	echo "<th>Disasters</th>";
		echo "<th>Location</th>";
			echo "<th>Date</th>";
			echo "<th>Needs</th>";
			echo "<th>Contact</th>";
	echo "</tr>";
	echo"</thead>";
	while ($run=mysqli_fetch_array($result)) {
	

		echo'<tr><td>'.$run['disaster'].'</td><td>'.$run['location'].'</td><td>'.$run['date_of_d'].'</td><td>'.$run['needs'].'</td><td>'.$run['contact'].'</td></tr>';
	}
	

echo "</table>";
}}

?>