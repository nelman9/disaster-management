
<?php
require_once('loginscript.php');
if(isset($_SESSION['sess_user_adm'])){

}else{
	header('location:index.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Admin</title>
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
                                <li>
					<a href="missing.php">missing persons</a>
				</li>
				
				<li>
					<a href="edit.php">personnel</a>
				</li>
                                <li>
					<a href="staff.php">staff registration</a>
				</li>
			</ul>
		</div>
	</div>
	<div id="contents">
		<div id="about" class="body">
			<form method="post" action="delete1.php">
	
            
            <select name="id" id="d_name"  class="input input1" onchange="" >
                    <option border="1" cellpadding="2" value="na">staffs</option>

<?php

require_once('includes/conn.php');

   
	$sql="SELECT fi_name,staff_no FROM staffs ";
	$result=mysqli_query($con,$sql);
	

	while($row=mysqli_fetch_assoc($result))
	{

	     $fn=$row['fi_name'];
	     $stfn=$row['staff_no'];

	
    
    	echo "<option value='$fn'> $fn </option>";
    	echo "<option value='$stfn'> $stfn </option>";

	}

?>
</select>

            <input name="delete" type="submit" id="delete" value="Delete" />

           </form> 
			<fieldset>
			<legend><h2>Admin</h2></legend>
			<form method="GET" action="<?php $_PHP_SELF ?>">

          <?php
require_once('includes/conn.php');

$sql = "SELECT fi_name,se_name,surname,staff_no,m_no,dpt FROM staffs";

$result = mysqli_query($con, $sql); 
$rows = mysqli_num_rows($result);
if ($rows>0){
	echo '<table border="1" cellpadding="2" cellspacing="2" id="display">';
	echo "<thead>";
	echo"<tr>";
	echo "<th>First Name</th>";
		echo "<th>Middle Name</th>";
			echo "<th>surname</th>";
			echo "<th>Staff Number</th>";
			echo "<th>Mobile Number</th>";
			echo "<th>Department</th>";
			echo "</tr>";
	echo"</thead>";
	while ($run=mysqli_fetch_array($result)) {
	/*	echo "<tr>";
echo '<td>
<input name="checkbox" type="checkBox" id="checkbox" value='.$row['idno'].'>
</td>';*/

		echo'<tr><td>'.$run['fi_name'].'</td><td>'.$run['se_name'].'</td><td>'.$run['surname'].'</td><td>'.$run['staff_no'].'</td><td>'.$run['m_no'].'</td><td>'.$run['dpt'].'</td></tr>';
	}
	//echo "<td><a href=\"emp_updateform.php?idno=".$row['staff_no'] ."\">";

echo "</table>";
}

?>

<td><a href="<?php echo $_SERVER['PHP_SELF'];?>?staff_no=<?php echo $row['staff_no'];?>">


</form> 

		</fieldset>
		</div>
	</div>
</body>
</html>




