<?php
$uname=isset($_SESSION["username"])?$_SESSION["username"]:"";   //先判断是否已经设置变量，再确定其它动作
if($uname!=NULL){
	include("conn.php");
	$sql=mysqli_query($conn,"SELECT dtotaldist FROM sportdata WHERE username='".$uname."'");  //查询表
	$row=mysqli_fetch_row($sql);      //返回数组
	echo $row[0];
	
}
?>
