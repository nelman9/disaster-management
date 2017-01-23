<!DOCTYPE html>
<html>
<head>
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
			<nav>
			<ul id="navigation">
				<li>
					<a href="index.php">Home</a>
				</li>
				<li>
					<a href="edit.php">personnel</a>
					 <ul>
								  <li><a href="emp.php">staffs</a></li>
					 </ul>
				</li>
                    <li>
					<a href="staff.php">staffregistration</a>
					  
				</li>
				</li>
				 <li>
					<a href="missing.php">missing persons</a>
					              <ul>
								  <li><a href="misphotos.php">photos</a></li>
								 </ul>
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
			<fieldset>
			<legend><h2>staff</h2></legend>
			<form action="staffnfo.php" name="regform" method="POST">
				  <table  border="0"  cellpadding="2">
				 <tr>
	             <td>Firstname:&nbsp;&nbsp; </td>
				 <td><input type="text" name="fi_name" size="30" required/><span id="stat"></span></td>
				 </tr>
				 <tr>
	             <td>Middlename:&nbsp;&nbsp;</td>
				<td> <input type="text"  name="se_name" size="30" required/></td>
				 </tr>
				 <tr>
	             <td>surname: </td>
				 <td><input type="text"  name="surname" size="30" required/></td>
				 </tr>
				 <tr>
		         <td>Staff number:</td>
				 <td><input type="number" name="st_id"   size="30" required/></td>
				 </tr>
				 <tr>
		        <td>mobile number:</td>
				 <td><input type="number" name="mob" size="15" required/></td>
                                 </tr>
                 <td>Departments:</td>
				 <td><input type="text" name="dpt" size="15" required/></td>
                                 </tr>
                                  <tr>
				 <td><input type="submit"  name="submit"   value="register" /></td>
				 </tr>
				 </table></form>
                                 

                     
		</fieldset>
		</div>
	</div>
</body>
</html>
