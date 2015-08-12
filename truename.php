<?php
$uname=isset($_SESSION["username"])?$_SESSION["username"]:"";   //先判断是否已经设置变量，再确定其它动作
	if($uname!=NULL){
	      include("conn.php");
	      $sql=mysqli_query($conn,"SELECT * FROM meminfo WHERE username='".$uname."'");
          $row=mysqli_fetch_row($sql);
	      echo $row[2];
		  }
?>