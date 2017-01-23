
<html>
<head>
	<meta charset="UTF-8">
	<title>disasters</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<script src="js/print.js"> </script>
	<script src="js/jquery-2.1.js"> </script>
	<link rel="stylesheet" type="text/css" href="js/date_pic/date_input.css">
	<script type="text/javascript" src="js/calendarDateInput.js"></script>

	<?php include_once("tpl/common_js.php"); ?>
         <script src="js/date_pic/jquery.date_input.js"></script>  
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

<form method="post" action ="">
	 <form action="<?php $_SERVER['PHP_SELF'];?>" method="POST" >
         <table class="form"  border="0" cellspacing="0" cellpadding="0">
    <tr>
      <div class='wrapper'>
      <td></td>
      <td><strong>From  :</strong></td>
      <div class='bg'>
      <td><input  type="text" id="fromd" name="fromdate" style="width:80px;" ></td>
      <td><strong>To  :</strong></td>
      <div class='bg'>
      <td><input  type="text" id="tod" name="todate" style="width:80px;"  ></td>&nbsp;&nbsp;&nbsp;
      <td></td>
     
             
  </tr>
  </table>

           </form>
 </body>
 </html>


