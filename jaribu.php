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
	<div id="contents">
		<div id="about" class="body">
			<fieldset>
			<legend><h2>staff</h2></legend>
			<form action="userresult.php" name="regform" method="POST">
				  <table  border="0"  cellpadding="2">
				 
		    <td>constituency:</td>
				 <td><input type="text" name="con" size="15"/></td>
                                 </tr>
                     <td>Id:</td>
				 <td><input type="text" name="id" size="15"/></td>
                                 </tr>
                                  <tr>
				 <td><input type="submit"  name="submit"   value="update" /></td>
				 </tr>
				 </table></form>
                                 

                     
		</fieldset>
		</div>
	</div>
</body>
</html>
