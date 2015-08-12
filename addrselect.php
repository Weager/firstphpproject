<?php
	      $sql=mysqli_query($conn,"SELECT address FROM meminfo WHERE username='".$uname."'");
          $row=mysqli_fetch_row($sql);
		  if($row[0]==NULL){
			  $prov='';
			  $city='';
		  }
		  else{
		  $prov=$row[0][0];
		  $city=$row[0][2];
		  }
		  $pdu="";
		  $pa="";
		  $pb="";
		  $pc="";
		  $pc="";
		  $pd="";
		  $pe="";
		  $pf="";
		  $pg="";
		  $ph="";
		  $pi="";
		  $pj="";
		  $pk="";
		  $pl="";
		  $pm="";
		  $cdu="";
		  $ca="";
		  $cb="";
		  $cc="";
		  $cd="";
		  $ce="";
		  $cf="";
		  $cg="";
		  $ch="";
		  $ci="";
		  $cj="";
		  $ck="";
		  $cl="";
		  $cm="";
		  switch($prov){
			  case 'A':
			  $pa="selected";break;
			  case 'B' :
			  $pb="selected";break;
			  case 'C' :
			  $pc="selected";break;
			  case 'D' :
			  $pd="selected";break;
			  case 'E' :
			  $pe="selected";break;
			  case 'F ':
			  $pf="selected";break;
			  case 'G' :
			  $pg="selected";break;
			  case 'H' :
			  $ph="selected";break;
			  case 'I' :
			  $pi="selected";break;
			  case 'J' :
			  $pj="selected";break;
			  case 'K ':
			  $pk="selected";break;
			  case 'L' :
			  $pl="selected";break;
			  case 'M' :
			  $pm="selected";break;
			  default :
			  $pdu="selected";break;
		  }
		  switch($city){
			  case 'A':
			  $ca="selected";break;
			  case 'B' :
			  $cb="selected";break;
			  case 'C' :
			  $cc="selected";break;
			  case 'D':
			  $cd="selected";break;
			  case 'E' :
			  $ce="selected";break;
			  case 'F' :
			  $cf="selected";break;
			  case 'G' :
			  $cg="selected";break;
			  case 'H' :
			  $ch="selected";break;
			  case 'I':
			  $ci="selected";break;
			  case 'J' :
			  $cj="selected";break;
			  case 'K':
			  $pk="selected";break;
			  case 'L' :
			  $cl="selected";break;
			  case 'M' :
			  $cm="selected";break;
			  default :
			  $cdu="selected";break;
		  }