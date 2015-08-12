<?php
$uname=isset($_SESSION["username"])?$_SESSION["username"]:"";   //先判断是否已经设置变量，再确定其它动作
if($uname!=NULL){
	include("conn.php");
	$sql=mysqli_query($conn,"SELECT dtotalstep FROM sportdata WHERE username='".$uname."'");  //查询表
	$row=mysqli_fetch_row($sql);      //返回数组
	echo $row[0];
	$rank=0;
	if($row[0]>=20000) {
	   $rank=3;
	}
	if($row[0]<20000 && $row[0]>=8000){
		$rank=2;
	}
	if($row[0]<8000){
		$rank=1;
	}
	
	$sqla=mysqli_query($conn,"UPDATE sportdata SET is_well='$rank' WHERE username='".$uname."'");
}
?>