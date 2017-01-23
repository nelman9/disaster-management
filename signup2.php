<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>registration</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<script src="js/vald.js"> </script>
	<script src="js/check.js"> </script>
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
				<li class="selected">
					<a href="signup2.php">Registration</a>
				</li>
				<li>
					<a href="packages/donate.php">Donate</a>
				</li>
				<li>
					<a href="contact.php">Contact</a>
				</li>
				
			</ul>
		</div>
	</div>
	<div id="contents">
		<div id="about" class="body" >
		<fieldset><legend>Signup</legend>
		
			<form action="info.php" name="regform" method="POST" >
				  <table  border="0"  cellpadding="2">
				 <tr>
	             <td>Firstname:&nbsp;&nbsp; </td>
				 <td><input type="text" name="fi_name" id="fi_name" size="30" onkeyup="val()" required/><span id=""></span></td>
				 </tr>
				 <tr>
	             <td>Middlename:&nbsp;&nbsp;</td>
				<td> <input type="text"  name="se_name" id="se_name" size="30" onkeyup="val()" required/><span id=""></span></td>
				 </tr>
				 <tr>
	             <td>surname: </td>
				 <td><input type="text"  name="surname" id="surname"  size="30" onkeyup="val()"required/><span id=""></span></td>
				 </tr>
				 <tr>
				 <td>ID number:</td>
				 <td><input type="number" name="id"  id="id" onkeyup="checkuname()"  size="30" required pattern="[0-9]{8,8}" required/></td>
				 <td><span id="ustat"></span></td>
				 </tr>
				 <tr>
				 <td>D.O.B:</td>
				 <td>
				 	<select name="month" class="input input1" id="dob" onChange="changeDate(this.options[selectedIndex].value);">
  <option value="na">month</option>
  <option value="1">January</option>
  <option value="2">February</option>
  <option value="3">March</option>
  <option value="4">April</option>
  <option value="5">May</option>
  <option value="6">June</option>
  <option value="7">July</option>
  <option value="8">August</option>
  <option value="9">September</option>
  <option value="10">October</option>
  <option value="11">November</option>
  <option value="12">December</option>
</select>
<select class="input input1" name="day" id="day">
<option value="na">Day</option>
</select>
<select class="input input1" name="year" id="year">
<option value="na">Year</option>
</select>
<script language="JavaScript" type="text/javascript">
function changeDate(i){
var e = document.getElementById('day');
while(e.length>0)
e.remove(e.length-1);
var j=-1;
if(i=="na")
k=0;
else if(i==2)
k=28;
else if(i==4||i==6||i==9||i==11)
k=30;
else
k=31;
while(j++<k){
var s=document.createElement('option');
var e=document.getElementById('day');
if(j==0){
s.text="Day";
s.value="na";
try{
e.add(s,null);}
catch(ex){
e.add(s);}}
else{
s.text=j;
s.value=j;
try{
e.add(s,null);}
catch(ex){
e.add(s);}}}}
y = 1999;
while (y-->1900){
var s = document.createElement('option');
var e = document.getElementById('year');
s.text=y;
s.value=y;
try{
e.add(s,null);}
catch(ex){
e.add(s);}}
 
</script>

				 </td>
				 </tr>
				 <tr>
				 <td>Mobile No:</td>
				 <td><input type="text" name="mob" id="mob"  size="30"/></td>
				 </tr>
				 <tr>
				 <td>Constituency:</td>
				 <td>
				 					 	<select name="constituency" id="constituency" class="input input1" >
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
				 <td>Password:</td>
				 <td><input type="passsword" name="pwd" id="pwd" size="30" pattern="^(?=.*\d).{4,8}$"/></td>
				 <td><span id=""> Password must be between 4 and 8 digits long and include at least one numeric digit.</span></td>
				 <span id="pwd"></span></td>
				 </tr>
				 <tr>
				 <td>Confirm Password:</td>
				 <td><input type="password" name="cpwd"  id="cpwd" onkeyup="val()"  size="30"/><span id=""></span></td>
				 </tr>
				 <tr>
				 <td><input type="submit"  name="submit"  id="signupbtn" value="sign up" /><span id="status"></td>
				 </tr>
				 </table> </fieldset>
				</form>
				
		</div>
	</div>
	
</body>
</html>

