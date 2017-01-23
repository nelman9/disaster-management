<!DOCTYPE html>
<?php
require_once('loginscript.php');
if(isset($_SESSION['sess_user_adm'])){

}else{
	header('location:index.php');
}
?>
<html>
<head>
	<meta charset="UTF-8">
	<title>Photos</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
	<div id="header">
		<div>
			<div id="logo">
				<a href="index.php"><span>Disaster Management</span></a>
			</div>
			<ul id="navigation">
				<li>
					<a href="index.php">Home</a>
				</li>
				<li>
					<a href="disasterreg.php">Disaster Registration</a>
				</li>
				<li >
					<a href="missing.php">Missing Persons</a>
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
		</div>
	</div>
	<div id="contents">
		<div id="blog" class="body">
			<div id="main">
			
            <fieldset> 
			<legend><h3>Missing Persons</h3></legend>
			<form method="GET" action="<?php $_PHP_SELF ?>">
				    <?php
require_once('includes/conn.php');

$sql = "SELECT f_name,path FROM missing";

$result = mysqli_query($con, $sql); 
$rows = mysqli_num_rows($result);
if ($rows>0){
	echo '<table border="1" cellpadding="1" cellspacing="2" id="display">';
	echo "<thead>";
	echo"<tr>";
	echo "<th>Name</th>";
	    echo "<th>Photo</th>";
	echo "</tr>";
	echo"</thead>";
	while ($run=mysqli_fetch_array($result)) {
	
		echo "<tr>";
		echo "<td>" . $run['f_name'] . "</td>"; 
		echo "<td> <img src = 'http://localhost/dms/uploads/". $run['path'] ."' height='100px'  /> </td>";
		echo "</tr>";
	}
	
echo "</table>";
}

?>
			
		   </fieldset> 
			
           </div>

	<div id="footer">
		<div>
			<p>
				© Copyright 2032. All rights reserved.
			</p>
		</div>
	</div>
	</div>
</div>

</body>
</html>