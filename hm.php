<!DOCTYPE html>
<?php
require_once('loginscript.php');
if(isset($_SESSION['sess_user_id'])){

}elseif(isset($_SESSION['sess_user_adm'])){
	
	
}else{header('location:index.php');}
?>
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
			<nav>
			<ul id="navigation">
				<li>
					<a href="index.php">Home</a>
				</li>
				<li class="selected">
					<a href="hm.php">disaster</a>
					<ul>
								  <li><a href="misphotos.php">photos</a></li><br /><br />
								  <li><a href="missing.php">missing</a></li><br /><br />
								 
								 </ul>
				</li>
				<li><a href="misphotos.php">photos</a></li>
				
				<li>
					<a href="selectnids.php">Update Profile</a>
				</li>
				<li>
					<form   action="logoutscript.php" method="POST">
                                <table  border="0"  cellpadding="2">
				                <tr>
				                <input type="submit"  name="logout" id="btnlogout"  value="logout"/></td>
				 				</tr>
				 				</table>
			        </form>
		</li>	
			</ul>
		</nav>
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
	echo '<table border="1" cellpadding="2" cellspacing="2" id="display">';
	echo "<thead>";
	echo"<tr>";
	echo "<th>Disasters</th>";
	    echo "<th>Disaster ID</th>";
		echo "<th>Location</th>";
			echo "<th>Date</th>";
			echo "<th>Affected-victims</th>";
			echo "<th>Nature</th>";
			echo "<th>Missing Persons</th>";
	echo "</tr>";
	echo"</thead>";
	while ($run=mysqli_fetch_array($result)) {
	

		echo'<tr><td>'.$run['Disaster_id'].'</td><td>'.$run['d_id'].'</td><td>'.$run['location'].'</td><td>'.$run['date_of_incident'].'</td><td>'.$run['number_of_victims'].'</td><td>'.$run['nature'].'</td><td><a href="missing.php">Missing Persons</a></td></tr>';
	}
	

echo "</table>";
}

?>
			
                                 

                     
		</fieldset>
			
			</form>
			<fieldset>
			<legend><h3>Make a donation Today</h3></legend>
			
                 	<table>
					
					<form action="<?php $_PHP_SELF ?>" method="POST">
					
					
					     <tr>
						 <td>Disaster:</td>
                        <td>

				 	<select name="dis_id" id="d_name"  class="input input1" onchange="" >
                    <option border="1" cellpadding="2" value="na">disasters</option>
                    <?php    

                       require_once('includes/conn.php');

   
	                    $sql="SELECT Disaster_id,d_id FROM di ";
	                        $result=mysqli_query($con,$sql);
	

	                    while($row=mysqli_fetch_assoc($result))
	                                {

	                                $idn=$row['Disaster_id'];
	                                $id=$row['d_id'];
	                                

	
    
                                    	echo "<option value='$idn'>$idn</option>";
                                    	echo "<option value='$id'>$id</option>";
                                    }

                    ?>
                    </select>
				 	      </td>
                         <td><span id="">select disaster id<BR>to see details</span></td>
						 </tr>

			             <tr>
			               <td><input type="submit"  name="submit" value="details"/></td>
			           </tr>
			           			    <?php
require_once('includes/conn.php');
if(isset($_POST['dis_id'])){

$di=$_POST['dis_id'];
$sql = "SELECT * FROM donations WHERE d_id='$di'";

$result = mysqli_query($con, $sql); 
$rows = mysqli_num_rows($result);
if ($rows>0){
	echo '<table border="1" cellpadding="2" cellspacing="2" id="display">';
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
}


}

?>
						 </form>    
		</fieldset>
			
			
		</body>
</html>