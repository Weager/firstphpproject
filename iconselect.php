<?php
$uname=isset($_SESSION["username"])?$_SESSION["username"]:"";   //先判断是否已经设置变量，再确定其它动作
if($uname!=NULL){
	include("conn.php");
	$sql=mysqli_query($conn,"SELECT sex FROM meminfo WHERE username='".$uname."'");  //查询表中的用户性别
	$row=mysqli_fetch_row($sql);      //返回数组
	if($row[0]==0||$row[0]==1){
		include("usera.php");
	}
	else{
		include("userb.php");
	}
	mysqli_close($conn);
}
?>
	
	
