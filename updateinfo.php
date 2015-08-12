<?php
session_start();
$uname=isset($_SESSION["username"])?$_SESSION["username"]:"";
$U_tname=$_POST["truename"];        //接收提交的信息
$U_sex=$_POST["sex"];
$U_age=$_POST["age"];
$U_birthy=$_POST["birthy"];
$U_birthm=$_POST["birthm"];
$U_birthd=$_POST["birthd"];
$U_addressa=$_POST["addressa"];
$U_addressb=$_POST["addressb"];
$U_mobile=$_POST["mobile"];
$U_education=$_POST["education"];
$U_career=$_POST["career"];
$U_height=$_POST["height"];
$U_weight=$_POST["weight"];

include("conn.php");
$tname=trim($U_tname);
date_default_timezone_set("Asia/Shanghai"); 
$now=date("Y-m-d H:i:s");
$bar="-";
$birthday=$U_birthy.$bar.$U_birthm.$bar.$U_birthd;
$address=$U_addressa.$bar.$U_addressb;
$sql="UPDATE meminfo SET truename='$tname',sex='$U_sex',age='$U_age',last_update_time='$now',birthday='$birthday',address='$address',mobile='$U_mobile',education='$U_education',career='$U_career',height='$U_height',weight='$U_weight' WHERE username='$uname'";
$info=mysqli_query($conn,$sql);
if(!$info){
	echo "<script language='javascript'>alert('对不起，更新资料失败，请重试！'); history.back(); </script>";
	exit();
}
else{echo "<script language='javascript'>alert('更新资料成功！'); window.location='meminfo.php'; </script>";
			exit();
}
mysqli_close($conn);
?>
	
