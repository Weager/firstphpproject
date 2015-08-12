<?php
	$sql=mysqli_query($conn,"SELECT is_well FROM sportdata WHERE username='".$uname."'");  //查询表
	$row=mysqli_fetch_row($sql);      //返回数组
	switch($row[0]){
	
		case 3 :  echo "优良     请保持！";break;
	
	    case 2 :  echo "一般     请加油！"; break; 
		
		case 1 :  echo "较差     请努力！"; break;
	     
	    default : echo "";
	}
?>
