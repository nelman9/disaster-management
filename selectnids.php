<!DOCTYPE html>
<?php
include('loginscript.php');
if(isset($_SESSION['sess_user_id'])){

}elseif (isset($_SESSION['sess_user_adm'])) {
	# code...
}else{
	header('location:index.php');
}
?>
<html>
<head>
	<meta charset="UTF-8">
	<title>registration</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<script src="js/main.js"> </script>
	<script src="js/vald.js"> </script>
</head>
<body>
	<div id="header">
		<div>
			<div id="logo">
				<a href="index.php"><span>Disaster management</span></a>
			</div>
			<ul id="navigation">
				
				<li>
					<a href="index.php">Home</a>
				</li>
				<li >
					<a href="hm.php">disaster</a>
				</li>
				<li><a href="misphotos.php">photos</a></li>
				
				<li class="selected">
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
		</div>
	</div>
	<div id="contents">
		<div id="about" class="body" >
		<fieldset><legend>User details</legend>
			 <?php
require_once('includes/conn.php');
{

$di=$_SESSION['sess_user_id'];
$sql = "SELECT * FROM reg_details WHERE idno='$di' ";

$result = mysqli_query($con, $sql); 
$rows = mysqli_num_rows($result);
if ($rows>0){
	echo '<table border="1" cellpadding="2" cellspacing="2" id="display">';
	echo "<thead>";
	echo"<tr>";
	echo "<th>FirstName</th>";
		echo "<th>MiddleName</th>";
			echo "<th>Surname</th>";
			echo "<th>constituency</th>";
			echo "<th>Contact</th>";
			echo "<th>password</th>";
	echo "</tr>";
	echo"</thead>";
	while ($run=mysqli_fetch_array($result)) {
	

		$fname=$run['f_name'];
		$m_name=$run['m_name'];
		$s_name=$run['s_name'];
		$constituency=$run['constituency'];
		$m_no=$run['m_no'];
		$password=$run['password'];



		 
		 echo'<tr><td>'.$run['f_name'].'</td><td>'.$run['m_name'].'</td><td>'.$run['s_name'].'</td><td>'.$run['constituency'].'</td><td>'.$run['m_no'].'</td><td>'.$run['password'].'</td></tr>';
	}
	
	echo "<table/>";
}}

?>
		</fieldset>
		<form method="post"  action="<?php $_PHP_SELF ?>">
				<table>
            <tr>
            	<td>firstName:</td>
                <td>
				<input type="text"  name="fn" value="<?php include('profinfo.php'); echo $row['f_name']; ?>" />
               </td>
           </tr>
               <tr>
               	<td>middleName:</td>
                <td>
				<input  name="mn" value="<?php include('profinfo.php'); echo $row['m_name']; ?>" />
               </td>
               </tr>  
               <tr>
               	<td>surName:</td>
                <td>
				<input name="sn"  value="<?php include('profinfo.php'); echo $row['s_name']; ?>" />
               </td>
               </tr>
               <tr>
               	<td>constituecy:</td>
                <td>
				<input name="cn" value="<?php include('profinfo.php'); echo $row['constituency']; ?>" />
               </td>
               </tr>
               <tr>
               	<td>contact:</td>
                <td>
				<input name="ct" value="<?php include('profinfo.php'); echo $row['m_no']; ?>" />
               </td>
               </tr>
               <tr>
               	<td>password:</td>
                <td>
				<input name="ps" value="<?php include('profinfo.php'); echo $row['password']; ?>" />
               </td>
               </tr>
                 <tr>
				 <td><input type="submit"  name="submit" value="update" /><span id="sta"></td>
				 </tr>
              </table>


		</form>

		<?php
require_once('includes/conn.php');
require_once('loginscript.php');

if(isset($_POST['submit']))
{

$fn=$_POST['fn'];
$mn=$_POST['mn'];
$sn=$_POST['sn'];
$cn=$_POST['cn'];
$ct=$_POST['ct'];
$ps=$_POST['ps'];
$idn=$_SESSION['sess_user_id'];

$sql="UPDATE reg_details SET f_name='$fn', m_name='$mn',s_name='$sn',m_no='$ct',password='$ps'
   WHERE idno='$idn'";
$result=mysqli_query($con,$sql);

if($result)
{
echo '<strong style="color:#F00;">UPDATE SUCCESSFUL</strong>';
header('Refresh: 4 ;url=selectnids.php');
}
else{
echo "Not Updated";
}
}

?>
		</div>
	</div>	
</body>
</html>

