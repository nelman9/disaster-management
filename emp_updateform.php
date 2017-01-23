<html>
<head>
<title>Employee Update Form</title>
     <meta charset="UTF-8">
	 <title>Staffs</title>
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
					<a href="alerts.php">Alert</a>
				</li>
                                <li>
					<a href="staff.php">staff registration</a>
				</li>
			</ul>
		</div>
	</div>
<table width="80%" border="1" cellpadding="2" cellspacing="2"><tr><td>
<?php
require_once('includes/conn.php');

$idno=$_GET['idno'];
$result = mysql_query("SELECT * FROM reg_details where idno='$idno'");
?>
<form action="emp_update.php" method="POST">
<?php
while($row = mysql_fetch_array($result))
{
echo "<tr><th>Update the information of ".$row['idno']."</th></tr>";
echo "<table border='1'>";
echo "<tr><th>f_name</th><td>";
?>
<input type="text" name="fname" value="<?php echo "" . $row['f_name'] . "";
?>"/></td></tr>
<?php
echo "<tr><th>mname</th><td>";
?>
<input type="text" name="mname" value="<?php echo "".$row['m_name']."";
?>"/></td></tr>
<?php
echo "<tr><th>surname</th><td>";
?>
<input type="text" name="sname" value="<?php echo "".$row['s_name']."";
?>"/></td></tr>
<?php
echo "<tr><th>dob</th><td>";
?>
<input type="text" name="dob" value="<?php echo "".$row['dob']."";
?>"/></td></tr>
<?php
echo "<tr><th>constituency</th><td>" 
?>
<input type="text" name="con" value="<?php echo "". $row['constituency'] . "";
?>"/></td></tr>
<?php
echo "<tr><th>phone</th><td>";
?>
<input type="text" name="phone" value="<?php echo "". $row['m_no'] . "";
?>"/></td></tr>
<?php
echo "<tr><th>type</th><td>";
?>
<input type="text" name="type" value="<?php echo "".$row['type']."";
?>"/></td></tr>
<?php
echo "<tr><th>ID number</th><td>";
?>
<input type="text" name="idno" value="<?php echo "".$row['idno']."";
?>"/></td></tr>

<tr><td></td><td>
<input type="hidden" name="idno" value="<?php echo "".$row['idno']."";?>"/>
<input type="submit" name="submit" value="SAVE"/></td></tr>
</table>
</td></tr></table>
</form>
<?php
}
?>
</body>
</html>