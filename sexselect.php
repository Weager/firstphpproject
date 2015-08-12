<?php
	      $sql=mysqli_query($conn,"SELECT * FROM meminfo WHERE username='".$uname."'");
          $row=mysqli_fetch_row($sql);
		  $zero="";
		  $one="";
		  $two="";
		  switch($row[3]){
		  case 1 :
		       $one="selected";break;
		  case 2 :
		       $two="selected";break;
		  default:
		       $zero="selected";
		  }
		  
?>