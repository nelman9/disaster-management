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
	<script src="js/print.js"> </script>
	<script src="js/jquery-2.1.js"> </script>
	<script src="js/check.js"></script>
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
                                <li>
					<a href="missing.php">missing persons</a>
				</li>
				<li class="selected"><a href="edit.php">personnel</a>
							     <ul>
								  <li><a href="emp.php">Employees</a></li><br /><br />
								  <li><a href="staff.php">staffs</a></li>
								
								 </ul>
				</li> 
                  
				<li>
					<a href="disasterreg.php">Disaster Registration</a>
				</li>
				
			</ul>
		</nav>
		</div>
	</div>
	<div id="contents">

		<div id="about" class="body">
			<form method="post" action="delete.php">
				<h4>Registered Users</h4>
	
                    <select name="id" id="d_name"  class="input input1" onchange="" >
                    <option border="1" cellpadding="2" value="na">users</option>

<?php

require_once('includes/conn.php');

   
	$sql="SELECT s_name,idno FROM reg_details ";
	$result=mysqli_query($con,$sql);
	

	while($row=mysqli_fetch_assoc($result))
	{

	     $sn=$row['s_name'];
	     $idn=$row['idno'];

	
    
    	echo "<option value='$sn'> $sn </option>";
    	echo "<option value='$idn'> $idn </option>";

	}

?>
</select>




            <input name="delete" type="submit" id="delete" value="Delete" />

           </form> 
           <form method="POST" action="emp_update.php">
	
            

                    <select name="id" id="d_name"  class="input input1" onchange="" >
                    <option border="1" cellpadding="2" value="na">Users</option>

<?php

require_once('includes/conn.php');

   
	$sql="SELECT s_name,idno FROM reg_details ";
	$result=mysqli_query($con,$sql);
	

	while($row=mysqli_fetch_assoc($result))
	{

	     $sn=$row['s_name'];
	     $idn=$row['idno'];

	
    
    	echo "<option value='$sn'> $sn </option>";
    	echo "<option value='$idn'> $idn </option>";

	}

?>
</select>


            <input name="admin" type="submit" value=" create admin" />

           </form> 
           <form method="POST" action="block.php">
	

                    <select name="id" id="d_name"  class="input input1" onchange="" >
                    <option border="1" cellpadding="2" value="na">Users</option>

<?php

require_once('includes/conn.php');

   
	$sql="SELECT s_name,idno FROM reg_details ";
	$result=mysqli_query($con,$sql);
	

	while($row=mysqli_fetch_assoc($result))
	{

	     $sn=$row['s_name'];
	     $idn=$row['idno'];

	
    
    	echo "<option value='$sn'> $sn </option>";
    	echo "<option value='$idn'> $idn </option>";

	}

?>
</select>


            <input name="block" type="submit" value="block" />

           </form> 
           <form>
           	<input type="text"  name="search" id="idno" size="15" onkeyup="checkuser()"/>
    
            <input name="block" type="submit" value="search" />
            <span id="idstat"></span>

           </form>
               
			<fieldset>
			<legend><h2>Admin</h2></legend>

			<form method="GET" action="<?php $_PHP_SELF ?>">
  <div id="mydiv">
  		<?php
   require_once('includes/conn.php');

   
	$sql="SELECT * FROM reg_details ";
	$result=mysqli_query($con,$sql);
	  if(mysqli_num_rows($result)>0)
	  	{ echo "NUMBER OF REGISTERED ACCOUNTS IS:", mysqli_num_rows($result);}


?>
</br>
<?php
   require_once('includes/conn.php');

   
	$sql="SELECT * FROM reg_details WHERE type='user'";
	$result=mysqli_query($con,$sql);
	  if(mysqli_num_rows($result)>0)
	  	{ echo "NUMBER OF REGISTERED USERS IS:", mysqli_num_rows($result);}


?>
</br>
<?php
   require_once('includes/conn.php');

   
	$sql="SELECT * FROM reg_details WHERE type='admin'";
	$result=mysqli_query($con,$sql);
	  if(mysqli_num_rows($result)>0)
	  	{ echo "NUMBER OF REGISTERED ADMIN IS:", mysqli_num_rows($result);}


?>
</br>

          <?php
require_once('includes/conn.php');

$sql = "SELECT f_name,m_name,s_name,idno,dob,m_no,constituency,password,type,status FROM reg_details";

$result = mysqli_query($con, $sql); 
$rows = mysqli_num_rows($result);
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
	while ($run=mysqli_fetch_array($result)) {
	
		echo'<tr><td>'.$run['f_name'].'</td><td>'.$run['m_name'].'</td><td>'.$run['s_name'].'</td><td>'.$run['idno'].'</td><td>'.$run['dob'].'</td><td>'.$run['m_no'].'</td><td>'.$run['constituency'].'</td><td>'.$run['type'].'</td><td>'.$run['status'].'</td></tr>';
	}
	//echo "<td><a href=\"emp_updateform.php?idno=".$row['idno'] ."\">";

echo "</table>";
}

?>
</div>
                   <input class="button1" type="button" value="Print" onclick="PrintElem('#mydiv')" />

<td><a href="<?php echo $_SERVER['PHP_SELF'];?>?idno=<?php echo $row['idno'];?>">


</form> 

		</fieldset>
		</div>
	</div>
</body>
</html>


 