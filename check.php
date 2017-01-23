<?php

require_once('includes/conn.php');
if(isset($_POST['usernamecheck']))
{
    $id = $_POST['usernamecheck'];
	$sql="SELECT d_id FROM di WHERE Disaster_id= '$id'";
	$result=mysqli_query($con,$sql);
	$row=mysqli_fetch_assoc($result);

	$idn=$row['d_id'];

	if($result)
    {
    	echo $idn;

	}
}
if(isset($_POST["useridcheck"])){

	
	 
	$username = preg_replace('#[^a-z0-9]#i', '', $_POST['useridcheck']);

	$sql2 = "SELECT * FROM reg_details WHERE idno LIKE '%$username%'";
    $result2= mysqli_query($con,$sql2); 
    $rows = mysqli_num_rows($result2);
if ($rows>0){
	echo '<table border="1" cellpadding="2" cellspacing="2" id="display">';
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
			echo "<th>status</th>";
	echo "</tr>";
	echo"</thead>";
	while ($run=mysqli_fetch_array($result2)) {
	
		echo'<tr><td>'.$run['f_name'].'</td><td>'.$run['m_name'].'</td><td>'.$run['s_name'].'</td><td>'.$run['idno'].'</td><td>'.$run['dob'].'</td><td>'.$run['m_no'].'</td><td>'.$run['constituency'].'</td><td>'.$run['type'].'</td><td>'.$run['status'].'</td></tr>';
	}
	//echo "<td><a href=\"emp_updateform.php?idno=".$row['idno'] ."\">";

echo "</table>";
}}
if(isset($_POST["misscheck"])){

	
	 
	$username = preg_replace('#[^a-z0-9]#i', '', $_POST['misscheck']);

	$sql3 = "SELECT f_name,m_name,s_name,id_number,m_no,constituency,path FROM missing WHERE id_number LIKE '%$username%'";
    $result3= mysqli_query($con,$sql3); 
    $rows = mysqli_num_rows($result3);
if ($rows>0){
	echo '<table border="1" cellpadding="2" cellspacing="2" id="display">';
	echo "<thead>";
	echo"<tr>";
	echo "<th>First Name</th>";
		echo "<th>Middle Name</th>";
			echo "<th>surname</th>";
			echo "<th>ID Number</th>";
			echo "<th>Mobile Number</th>";
			echo "<th>constituency</th>";
			echo "<th>photo</th>";
	echo "</tr>";
	echo"</thead>";
	while ($run=mysqli_fetch_array($result3)) {
	
		echo'<tr><td>'.$run['f_name'].'</td><td>'.$run['m_name'].'</td><td>'.$run['s_name'].'</td><td>'.$run['id_number'].'</td><td>'.$run['m_no'].'</td><td>'.$run['constituency'].'</td></tr>';
	    
	}
	//echo "<td><a href=\"emp_updateform.php?idno=".$row['idno'] ."\">";

echo "</table>";
}}



if(isset($_POST["passcheck"])){
	$password = $_POST['passcheck'];
	$uppercase = preg_match('@[A-Z]@', $password);
    $lowercase = preg_match('@[a-z]@', $password);
    $number    = preg_match('@[0-9]@',$password);
  	//$regex2='/^[a-zA-Z]*$/';

if(!$uppercase || !$lowercase || !$number || strlen($password) < 8){
    echo '<strong style="color:#F00;">Password is invalid.</strong>';
  }else{
  	echo '<strong style="color:#009900;">Password is Ok</strong>';
  }
}











?>