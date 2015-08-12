<?php
	      $sql=mysqli_query($conn,"SELECT education FROM meminfo WHERE username='".$uname."'");
          $row=mysqli_fetch_row($sql);
		  if($row[0]==NULL){
			  $edu='';
		  }
		  else {
		  $edu=$row[0][0];
		  }
		  $zero="";
		  $one="";
		  $two="";
		  $three="";
		  $four="";
		  $five="";
		  $six="";
		  $seven="";
		  $eight="";
		  switch($edu){
			  case '1' :
			  $one="selected";break;
			  case '2' :
			  $two="selected";break;
			  case '3' :
			  $three="selected";break;
			  case '4' :
			  $four="selected";break;
			  case '5' :
			  $five="selected";break;
			  case '6' :
			  $six="selected";break;
			  case '7' :
			  $seven="selected";break;
			  case '8' :
			  $eight="selected";break;
			  default :
			  $zero="selected";break;
		  }	  		  
?>