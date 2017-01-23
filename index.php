<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>disaster response</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	
</head>
<body>
	<div id="header">
		<div>
			<div id="logo">
				<a href="index.php"><span>Red-Cross Emergency reporting System</span></a>
			</div>
			<nav>
			<ul id="navigation">

				<li class="selected">
					<a href="index.php">Home</a>
					      <ul>
								  <li><a href="partp.php">Disasters</a></li><br /><br />
								  
								  <li><a href="#">Photos</a></li> <br />
								 </ul>
				</li>
				<li>
					<a href="partp.php">disaster</a>
				</li>
				<li class="">
					<a href="packages/donate.php">Participate</a>
				</li>
				
				<li>
					<a href="report.php">Reporting</a>
					<ul>
								  <li><a href="report.php">Help</a></a></li><br /><br />
								 </ul>
				</li>
				<li class=>
					<a href="about.php">About</a>
					<ul>
								  <li><a href="contact.php">Contact</a></a></li><br /><br />
								  
								  <li><a href="#">Photos</a></li> <br />
								 </ul>
				</li>
			</ul>
		</nav>
		</div>
	</div>

	<div id="contents">
		<div id="adbox1">
			<img id= "picha" src="images/img6.jpg">
		</div>
		<div id="featured" class="body">
			<div id="main">
				<h2>LOGIN</h2>
				<ul>
					<li>
					<fieldset>
					<legend>LOGIN</legend>
					<table>
					
					<form action="loginscript.php" method="POST">
					
					
					     <tr>
						 <td>idnumber:</td>
						 <td><input type="number"  name="id_number" size="30" required /></td>
						 </tr>
						 <tr>
						 <td>password: </td> 
						 <td><input type="password"  name="pwd" size="30" required /></td>
			             </tr>
			             <tr>
			               <td><input type="submit"  name="submit" value="sign in"/></td>
			           </tr>
						 </form>
						 
						 <a href="signup2.php"><input type="submit"  name="submit"   value="sign up"/></a>
						 
						 </table>
						  </fieldset>
						
					   <li>
						<span class="time">Mar<br> 17</span>
						<p>
							<span class="don"><marquee>EMERGENCY NUMBER-0723695762</marquee></span>
							<span class="don" >0723695762</span>
							
						</p>
					</li>
					<li>
						<span class="time">Mar<br> 30</span>
						<p>
							<em><a href="index.php">floods mitigation processes</a></em> like. This is just a place holder. This is just a place holder.
						</p>
					</li>
					
				</ul>
			</div>
			<div id="sidebar">
				<h2>PROJECTS</h2>
				<ul>
					<li>
						<p>
							<em><a href="answer.php">Turkana projects</a></em> Aenean ornare purus at ante vulputate placerat dignissim nibh convallis. Cras commodo egestas nisl et tristique eros.
						</p>
					</li>
					<li>
						<p>
							<em><a href="answer.php">Nakuru projects</a></em> Aenean ornare purus at ante vulputate placerat dignissim nibh convallis. Cras commodo egestas nisl et tristique eros.
						</p>
					</li>
					
				</ul>
			</div>
		</div>
	</div>
	
<script src="js/main.js"> </script>
</body>
</html>