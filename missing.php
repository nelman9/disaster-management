<!DOCTYPE html>
<?php
require_once('loginscript.php');
if(isset($_SESSION['sess_user_id'])){

}elseif (isset($_SESSION['sess_user_adm'])) {
	
}else{
	header('location:index.php');
}
?>

<html>
<head>
	<meta charset="UTF-8">
	<title>Missing</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
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
				<li class="selected">
					<a href="hm.php">Disasters</a>
				</li>              
			    <li>
					<a href="missing.php">missing persons</a>
					              <ul>
								  <li><a href="misphotos.php">photos</a></li>
								 </ul>
				</li>
				<li>
					<a href="donate.php">Donations</a>
				</li>
				 
			</ul>
		</nav>
		</div>
	</div>
	<div id="contents">
		<div id="about" class="body">
			<fieldset>
			<legend><h2>missing persons</h2></legend>
			<form action="missinginfo.php" name="regform" method="POST"  enctype="multipart/form-data">
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
				 <td>Constituency:</td>
				 <td>
				 					 	<select name="constituency" class="input input1" required >
  <option value="na">constituency</option>
  <option value="NAKURUEAST">NAKURU-EAST</option>
  <option value="NAIVASHA">NAIVASHA</option>
  <option value="MOLO">MOLO</option>
  <option value="NAKURUWEST">NAKURU-WEST</option>
  <option value="KURESOINORTH">KURESOI-NORTH</option>
  <option value="KURESOISOUTH">KURESOI-SOUTH</option>
  <option value="SUBUKIA">SUBUKIA</option>
  <option value="RONGAI">RONGAI</option>
  <option value="NJORO">NJORO</option>
  <option value="GILGIL">GILGIL</option>
  <option value="BAHATI">BAHATI</option>
</select>
				 </td>
				 </tr>
				 <tr>
		    <td>ID number:</td>
				 <td><input type="text" name="id"   size="30" required/></td>
				 </tr>
				 <tr>
		    <td>mobile number:</td>
				 <td><input type="number" name="mob" size="15" required/></td>
                                 </tr>
                 
                                  <tr>
				
				 </tr>
				 </table>
<table>
<label for="file">Photo:</label>
<input type="file" name="file" id="file"><br>
	<tr><td>Submit:</td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<td><input type="submit" value="submit" name="submit"></td></tr>
</table>
</form>

                            
                         <form action="" method="POST">
                                <h4>search</h4>
                                 <table border="0" cellpading="2">
                         <td>ID number:&nbsp;&nbsp; </td>
				 <td><input type="text" name="idn" id="idn" onkeyup="checkmis()" size="30"/><span id="idmis"></span></td>
				 </tr>
				 <tr>
	                 <td><input type="submit"  name="submit"   value="Search" /></td>
				 </tr>

                                </table>

                                  </form>
		</fieldset>
		</div>
	</div>
</body>
</html>
