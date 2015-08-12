<?php
session_start();
$uname=isset($_SESSION["username"])?$_SESSION["username"]:"";
$E_capacity=$_POST["capacity"];
$E_blood_high=$_POST["blood_high"];
$E_blood_low=$_POST["blood_low"];
$E_meters_short=$_POST["meters_short"];
$E_meters_medium=$_POST["meters_medium"];
$E_meters_max=$_POST["meters_max"];
$E_push_up=$_POST["push_up"];

if($uname!=NULL){
	include("conn.php");
	$sql=mysqli_query($conn,"SELECT * FROM meminfo WHERE username='".$uname."'");  //查询表
	$row=mysqli_fetch_row($sql);      //返回数组
	$E_height=$row[11];
	$E_weight=$row[12];    //获取身高和体重信息
	date_default_timezone_set("Asia/Shanghai"); 
    $now=date("Y-m-d H:i:s");
	$sql ="UPDATE evaluate SET height='$E_height',weight='$E_weight',capacity='$E_capacity',blood_high='$E_blood_high',blood_low='$E_blood_low',meters_short='$E_meters_short',meters_medium='$E_meters_medium',meters_max='$E_meters_max',push_up='$E_push_up',last_evaluate='$now' WHERE username='$uname'";
	$info=mysqli_query($conn,$sql);
if(!$info){
	echo "<script language='javascript'>alert('对不起，测评失败，请重试！'); history.back(); </script>";
	exit();
}
else{ 
$sqle=mysqli_query($conn,"SELECT * FROM evaluate WHERE username='".$uname."'");  //查询表
	$row=mysqli_fetch_row($sqle);      //返回数组
		$datamem=array($row[4],$row[5],$row[6],$row[7],$row[8],$row[9],$row[10]);
	
$sqlm=mysqli_query($conn,"SELECT age FROM meminfo WHERE username='".$uname."'");  //查询表
	$rowb=mysqli_fetch_row($sqlm);      //返回数组
	$age=$rowb[0];
		if($age>0 && $age<15){
	$datamean=array(8,105,68,13,120,400,10);
	}
	elseif($age>=15 && $age<25){
		$datamean=array(25,115,72,7,58,230,50);
	}
	elseif($age>=25 && $age<45){
		$datamean=array(35,117,75,6,50,210,70);
	}
	elseif($age>=45 && $age<60){
		$datamean=array(32,132,80,9,70,330,60);
	}
	else{
		$datamean=array(28,135,82,12,115,380,30);
	}
		$data=array();
		$data[0]=$datamem[0]-$datamean[0];
		$data[1]=$datamem[1]-$datamean[1];
		
	if($data[0]>=2 && $data[1]<=2){
	$token=3;
	}
	elseif(($data[0]<2 && $data[0]>=-1)&& $data[1]<=2){
		$token=2;
	}
	else $token=1;
	if($token=3){
		echo"<script language='javascript'>alert('你的体质良好，请继续保持！'); window.location='evaluatedisplay.php'; </script>";
	}
	elseif($token=2){
		echo"<script language='javascript'>alert('你的体质一般，请平时多锻炼！'); window.location='evaluatedisplay.php'; </script>";
	}
	else{
		echo"<script language='javascript'>alert('你的体质较差，请加强锻炼，注意营养！'); window.location='evaluatedisplay.php'; </script>";
	}
		$sqlee="UPDATE evaluate SET is_state='$token' WHERE username='$uname'";   //将体质状况写入数据库
	$infoa=mysqli_query($conn,$sqlee);
	
}
}
?>