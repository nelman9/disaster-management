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
	<title>disasters</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<script src="js/print.js"> </script>
	<script src="js/jquery-2.1.js"> </script>
	<link rel="stylesheet" type="text/css" href="js/date_input.css">
	<script type="text/javascript" src="js/calendarDateInput.js"></script>

	<?php include_once("includes/common_js.php"); ?>
         <script src="js/jquery.date_input.js"></script>  
  <script src="js/script2.js"></script>  
   
   
   
   
   <script>
  $(document).ready(function() {
  $('#fromd').jdPicker();
  $('#tod').jdPicker();
  
   
  });
function numbersonly(e){
        var unicode=e.charCode? e.charCode : e.keyCode
        if (unicode!=8 && unicode!=46 && unicode!=37 && unicode!=38 && unicode!=39 && unicode!=40){ //if the key isn't the backspace key (which we should allow)
        if (unicode<48||unicode>57)
        return false
    }
    }
    
    

  </script>
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
				</li>
				<li>
					<a href="missing.php">missing persons</a>
					      <ul>
								  <li><a href="misphotos.php">photos</a></li>
						  </ul>
	             </li>
				 <li>
					<a href="staff.php">staff registration</a>
				</li>
				<li>
					<a href="needs.php">Needs</a>
				</li>	
			</ul>
		</nav>
		</div>
	</div>
	<div id="contents">
		<div id="about" class="dis">

			<fieldset>
			<legend><h2>disasters</h2></legend>
			<form action="dis_info.php" name="regform" method="POST">
				  <table  border="0"  cellpadding="2">
				 <tr>
	             <td>Disaster Name:&nbsp;&nbsp; </td>
				 <td><input type="text" name="d_name" size="30" required/><span id="stat"></span></td>
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
		         <td>Number of victims:</td>
				 <td><input type="number" name="victnumb"   size="30" required/></td>
				 </tr>
				  <tr>
		         <td>Nature:</td>
				 <td><textarea   name="nat"     maxlength="35"  id="" class = "foo"required></textarea></td>
				 </tr>
                 <tr>
				 <td><input type="submit"  name="submit"   value="submit" /></td>
				 </tr>
				 </table></form>
                                  
		</fieldset>
		
		<fieldset>
			<legend><h3>disaster-report</h3></legend>
			<form method="post" action="del2.php">
  

          	<select name="id" id="d_name"  class="input input1" onchange="" >
                    <option border="1" cellpadding="2" value="na">disasters</option>
                   

                    
                    <?php    

                       require_once('includes/conn.php');

   
	                    $sql="SELECT Disaster_id,d_id FROM di ";
	                        $result=mysqli_query($con,$sql);
	

	                    while($row=mysqli_fetch_assoc($result))
	                                {

	                                $idn=$row['Disaster_id'];
	                                $id=$row['d_id'];
	                                

	
    
                                    	echo "<option value='$idn'>$idn</option>";
                                    	echo "<option value='$id'>$id</option>";
                                    }

                    ?>	
                    </select>

            <input name="delete" type="submit" id="delete" value="Delete" />

           </form> 
           <form action="<?php $_SERVER['PHP_SELF'];?>" method="POST" >
         <table class="form"  border="0" cellspacing="0" cellpadding="0">
    <tr>
      <div class='wrapper'>
      <td><strong>From  :</strong></td>
  </div>
      <div class='bg'>
      <td><input  type="text" id="fromd" name="fromdate" style="width:80px;" ></td>

      <td><strong>To  :</strong></td>
       </div>
      <div class='bg'>
      <td><input  type="text" id="tod" name="todate" style="width:80px;"  ></td>&nbsp;&nbsp;&nbsp;
      <td><input type="submit"  name="submit"   value="submit" /></td>
     
            </div>  
  </tr>
  </table>
  <div id = "mydiv">
  <?php
  require_once('includes/conn.php');

   
  
   if (isset($_POST['submit'])){
   $datefromd = $_POST['fromdate'];
   $datetod = $_POST['todate'];
   
   
   $phpdate = strtotime( $datefromd );
   $phpdate1 = strtotime( $datetod );
   $phpdate = date("Y-m-d",$phpdate);
   $phpdate1 = date("Y-m-d",$phpdate1);
    
	
	
	$query3 = "SELECT * FROM di WHERE date_of_incident>='$phpdate' and date_of_incident<='$phpdate1'";
	$result3 = mysqli_query($con,$query3);
	$row3 = mysqli_fetch_array($result3);
	if ($datefromd == "" || $datetod == ""){
		
		echo "<b>PLEASE FILL ALL THE TEXT FIELDS</b>";
		
		}elseif($row3>0){
	echo '<table border="1" cellpadding="2" cellspacing="2" id="display">';
	echo "<thead>";
	echo"<tr>";
	echo "<th>Disasters</th>";
	echo "<th>ID</th>";
		echo "<th>Location</th>";
			echo "<th>Date</th>";
			echo "<th>Affected-victims</th>";
			echo "<th>Nature</th>";
            
	echo "</tr>";
	echo"</thead>";
	while ($run=mysqli_fetch_array($result3)) {
	

		echo'<tr><td>'.$run['Disaster_id'].'</td><td>'.$run['d_id'].'</td><td>'.$run['location'].'</td><td>'.$run['date_of_incident'].'</td><td>'.$run['number_of_victims'].'</td><td><textarea  maxlength="35"  id="" class = "foo">'.$run['nature'].'</textarea></td></tr>';
	}
	

echo "</table>";
}


}
	
?>
</div>
                   <input class="button1" type="button" value="Print filtered" onclick="PrintElem('#mydiv')" />
           </form>
			<form method="GET" action="<?php $_PHP_SELF ?>">
				<div id = "mydiv1">
				    <?php
require_once('includes/conn.php');

$sql = "SELECT Disaster_id,d_id,location,date_of_incident,number_of_victims,nature FROM di";

$result = mysqli_query($con, $sql); 
$rows = mysqli_num_rows($result);
if ($rows>0){
	echo '<table border="1" cellpadding="2" cellspacing="2" id="display">';
	echo "<thead>";
	echo"<tr>";
	echo "<th>Disasters</th>";
	echo "<th>ID</th>";
		echo "<th>Location</th>";
			echo "<th>Date</th>";
			echo "<th>Affected-victims</th>";
			echo "<th>Nature</th>";
            
	echo "</tr>";
	echo"</thead>";
	while ($run=mysqli_fetch_array($result)) {
	

		echo'<tr><td>'.$run['Disaster_id'].'</td><td>'.$run['d_id'].'</td><td>'.$run['location'].'</td><td>'.$run['date_of_incident'].'</td><td>'.$run['number_of_victims'].'</td><td><textarea  maxlength="35"  id="" class = "foo">'.$run['nature'].'</textarea></td></tr>';
	}
	

echo "</table>";
}

?>
</div>
                   <input class="button1" type="button" value="Print Full" onclick="PrintElem('#mydiv1')" />
			</form>
                                           
		</fieldset>
		</div>
		</div>
		
		
		</body>
</html>