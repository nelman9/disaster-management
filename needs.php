<?php
require_once('loginscript.php');
if(isset($_SESSION['sess_user_adm'])){

}else{
	header('location:index.php');
}
?>
<html>
<head>
	<meta charset="UTF-8">
	<title>Needs</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<script src="js/needs.js"> </script>
</head>
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
					<a href="hm.php">disaster</a>
					<ul>
								  <li><a href="disasterreg.php">disasters</a></li><br /><br />
					 </ul>
				</li>
		
				<li>
					<a href="missing.php">missing persons</a>
					      <ul>
								  <li><a href="misphotos.php">photos</a></li><br /><br />
								  <li><a href="misphotos.php">photos</a></li><br /><br />
								  <li><a href="misphotos.php">photos</a></li><br />
								 </ul>
				</li>
				 <li>
					<a href="staff.php">staff registration</a>
					     <ul>
								  <li><a href="edit.php">personnel</a></li><br /><br />
								 </ul>
				</li>
				<li>
					<a href="needs.php">Needs</a>
					
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
		<div id="about" class="dis">

			<fieldset>
			<legend><h2>Needs</h2></legend>
			<form action="need_info.php"  method="POST">
				  <table  border="0"  cellpadding="2">
				 <tr>
	             <td>Disaster Name:&nbsp;&nbsp; </td>
				 <td>

				 	<select name="d_name" id="d_name"  class="input input1" onchange="checkuname()" >
                    <option value="na">disasters</option>
                    <?php    include('ndrop.php');?>
                    </select>
				 	</td>
				 
				 </tr>
				 <tr>
	             <td>Disasterid:&nbsp;&nbsp; </td>
                  <td><textarea  maxlength="15"  name="id" id="id" class = "foo"></textarea></td>
				 
				 
				 </tr>
				 <tr>
	             <td>Location:&nbsp;&nbsp;</td>
				<td> <input type="text"  name="l_name" size="30" required/></td>
				 </tr>
				 <tr>
	             <td>Date: </td>
				 <td>
				 	<select name="month" class="input input1" onChange="changeDate(this.options[selectedIndex].value);">
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
y = 2015;
while (y-->1900){
var s = document.createElement('option');
var e = document.getElementById('year');
s.text=y;
s.value=y;
try{
e.add(s,null);}
catch(ex){
e.add(s);}}
 
</script></td>
				 </tr>
				 <tr>
		         <td>Contacts:</td>
				 <td><input type="texts" name="cont"   size="30" required/></td>
				 </tr>
				  <tr>
		         <td>Needed Donations:</td>
				 <td><textarea   name="nd"   size="30" class="foo" required></textarea></td>
				 </tr>
                 <tr>
				 <td><input type="submit"  name="submit"   value="Submit" /></td>
				 </tr>
				 </table></form>
                                  
		</fieldset>

		</body>
</html>