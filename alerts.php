<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>emergency-alerts</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
	<div id="header">
		<div>
			<div id="logo">
				<a href="index.php"><span>Alerts</span></a>
			</div>
			<ul id="navigation">
				<li>
					<a href="index.php">Home</a>
				</li>
                                <li>
					<a href="missing.php">missing persons</a>
				</li>
				
				<li>
					<a href="alerts.php">Alerts</a>
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
			<form action="info.php" name="regform" method="POST">
				  <table  border="0"  cellpadding="2">
	             
				 <tr>
	             <td>surname: </td>
				 <td><input type="text"  name="surname" size="30"/></td>
				 </tr>
				 <tr>
		    <td>mobile number:</td>
				 <td><input type="number" name="st_id"   size="30"/></td>
				 </tr>
				 <tr>
		    <td>staff number:</td>
				 <td><input type="number" name="mob" size="15"/></td>
                                 </tr>
                    <td>Department:</td>
				 <td><input type="text" name="dpt" size="15"/></td>
                                 </tr>
                                  <tr>
				 <td><input type="submit"  name="submit"   value="send" /></td>
				 </tr>
				 </table></form>
		</fieldset>
		</div>
	</div>
</body>
</html>
