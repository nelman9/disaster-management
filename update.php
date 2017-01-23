
<html>
<script src="js/jquery-1.9.1.js"></script>
<script src="js/script.js"></script>
<script src="js/update.js"></script>

<link rel="stylesheet" href="css/search.css">
<input type="text" id="sbox"/>
<div id="cont">
  </div>
<div id="left">
</div>
<?php
if(isset($_GET['idno'])){
require_once('includes/conn.php');
$value=$_GET['idno'];

$sql = "SELECT f_name,m_name,s_name,idno,dob,m_no,constituency,password,type FROM reg_details where idno='$value'";

$result = mysqli_query($con, $sql); 
$rows = mysqli_num_rows($result);
if ($rows>0){
  //echo '<form onsubmit="return false">';
  while ($run=mysqli_fetch_array($result)) {
echo'
  <form method="POST" action="test.php" onsubmit="return false">
<table id = "confirm">
      <tr><th>First name</th><td id = "txtFirstname" onclick = "update(this.id)">'.$run['f_name'].'</td></tr>
      <tr><th>middle name</th><td id="txtsname" onclick = "update(this.id)">'.$run['m_name'].' </td></tr>
      <tr><th>sir name</th><td id="txtuname" onclick = "update(this.id)">'.$run['s_name'].'</td></tr>
      <tr><th>constituency</th><td id="txtcon" onclick = "update(this.id)">'.$run['constituency'].'</td><td><input type="submit"  id="btn_sub"   value="update"  onclick="updtecon()"/></td></tr>
      <tr><th>Phone</th><td id="txtphone" onclick = "update(this.id)" >'.$run['m_no'].'</td></tr>
      <tr><th>type</th><td id="txttyp" onclick = "update(this.id)" >'.$run['type'].'</td></tr>
      <tr><th>idno</th><td id="txti" onclick = "getid(this.id)" >'.$run['idno'].'</td></tr>
      <tr><th>z</th><input type="submit"  id="btn_sub"   value="update"  onclick="updte()"/></tr>
    </table>
    <span id="nots"></span>
</form>';
 
  
     //$result.='<li><a href="selector.php?id='.$run['idno'].'">'.$run['f_name'].' '.$run['m_name'].' '.$run['S_name'].' '.$run['idno'].' '.$run['dob'].' '.$run['m_no'].' '.$run['constituency'].' '.$run['type'].'<a></li>';

   // echo'<tr><td id = "id" onclick="update(this.id)" >'.$run['idno'].'</td><td>'.$run['f_name'].'</td><td>'.$run['m_name'].'</td><td>'.$run['s_name'].'</td><td>'.$run['dob'].'</td><td id = "mn" onclick = "update(this.id),add()">'.$run['m_no'].'</td><td id = "cn" onclick = "update(this.id)">'.$run['constituency'].'</td><td id = "ty" onclick = "update(this.id)">'.$run['type'].'</td></tr>';
  }


}
}

?>

<script type = "text/javascript">

  function update(id){
    
    if(document.getElementById(id).firstChild != "[object HTMLInputElement]"){
      //Get contents off cell clicked
      var content = document.getElementById(id).firstChild.nodeValue;
      //Switch to text input field
      document.getElementById(id).innerHTML = "<input type = 'text' name = 'txtNewInput' id = 'Input' value = '" + content + "'/>";
    }
  }

  function getid(id){
    
    if(document.getElementById(id).firstChild != "[object HTMLInputElement]"){
      //Get contents off cell clicked
      var content = document.getElementById(id).firstChild.nodeValue;
      //Switch to text input field
      document.getElementById(id).innerHTML = "<input type = 'text' name = 'txtNewInput' id = 'txtid' value = '" + content + "'/>";
    }
  }
</script>
</html>