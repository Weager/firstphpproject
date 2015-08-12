<?php
session_start();
$R_name=$_POST["username"];    //接收注册的信息
$R_paw=$_POST["password"];
$R_paws=$_POST["password_s"];
$R_email=$_POST["email"];
$R_qq=$_POST["m_qq"];



class chkinput2 {
	var $name;
	var $paw;
	var $paws;
	var $email;
	var $qq;
	function chkinput2($a,$b,$c,$d,$e){
		$this->name=$a;
		$this->paw=$b;
		$this->paws=$c;
		$this->email=$d;
		$this->qq=$e;
	}
	function checkinput2() {
		include("conn.php");   //连接数据库
		$sqla=mysqli_query($conn,"SELECT * FROM reginfo WHERE username='".$this->name."'");
		$sqlb=mysqli_query($conn,"SELECT * FROM reginfo WHERE email='".$this->email."'");
		$sqlc=mysqli_query($conn,"SELECT * FROM reginfo WHERE m_qq='".$this->qq."'");
		
		$infoa=mysqli_fetch_array($sqla);    //从结果集中取出一条，看是否有相同的用户昵称
		$infob=mysqli_fetch_array($sqlb);    //从结果集中取出一条，看是否有相同的用户邮箱
		$infoc=mysqli_fetch_array($sqlc);    //从结果集中取出一条，看是否有相同的用户QQ
		if($infoa){
			echo "<script language='javascript'>alert('对不起，此用户昵称已被注册，请更换昵称重新注册！'); history.back(); form2.username.focus();</script>";
			exit();
		   }
		if($infob){
			echo "<script language='javascript'>alert('对不起，此邮箱已被注册，请更换邮箱重新注册！');history.back(); form2.email.focus();</script>";
			exit();
		   }
		if($infoc){
			echo "<script language='javascript'>alert('对不起，此QQ已经被注册，请更换QQ重新注册！');history.back();form2.m_qq.focus();</script>";
			exit();
		   }
		   $now=date("Y-m-d H:i:s");
		   $sql="INSERT INTO reginfo(username,email,password,password_s,m_qq,regdate,last_revdate)
		        VALUES('$this->name','$this->email','$this->paw','$this->paws','$this->qq','$now','$now')";           //将注册信息插入数据库
		   $res=mysqli_query($conn,$sql)or die("数据库错误".mysqli_error());
		   if(!$res){
			    echo "<script language='javascript'>alert('注册失败！'); window.location='login.php'; </script>";
				exit();
		   }else if (mysqli_affected_rows($conn)>1||mysqli_affected_rows($conn)==0){
			   echo "<script language='javascript'>alert('数据库异常，请重新注册！'); window.location='login.php'; </script>";
			   exit();
		   }
		   else {
			   $sqld="INSERT INTO meminfo(username,last_update_time)
			   		VALUES('$this->name','$now')";                     //向用户信息表中插入用户名和更新时间
			   $sqle="INSERT INTO sportdata(username)
			   		VALUES('$this->name')";
			   $sqlf="INSERT INTO evaluate(username)
			   		VALUES('$this->name')";
				$newtable="history".$this->name;     //定义新的表名
				$sqlt="CREATE TABLE if not exists $newtable (id integer(10) primary key not null auto_increment,dateday date not null,hourstepa integer(15) not null,hourstepb integer(15) not null,hourstepc integer(15) not null,hourstepd integer(15) not null,hourstepe integer(15) not null,hourstepf integer(15) not null,hourstepg integer(15) not null,hoursteph integer(15) not null,hourstepi integer(15) not null,hourstepj integer(15) not null,hourstepk integer(15) not null,hourstepl integer(15) not null,hourstepm integer(15) not null,hourstepn integer(15) not null,hourstepo integer(15) not null,hourstepp integer(15) not null,hourstepq integer(15) not null,hourstepr integer(15) not null,hoursteps integer(15) not null,hourstept integer(15) not null,hourstepu integer(15) not null,hourstepv integer(15) not null,hourstepw integer(15) not null,hourstepx integer(15) not null)";
				$rest=mysqli_query($conn,$sqlt);
			   $resa=mysqli_query($conn,$sqld);
			  $resb=mysqli_query($conn,$sqle);
			   $resc=mysqli_query($conn,$sqlf);
			   if(!($resa && $resc && $resb && $rest)){
			   	echo "<script language='javascript'>alert('数据库异常，请重新注册！'); window.location='login.php'; </script>";
			   	exit();
			   }
			   else{
			   	echo "<script language='javascript'>alert('恭喜你，注册成功！请及时登陆并在会员中心完善个人信息！'); window.location='login.php'; </script>";
			   }
		   }
			   mysqli_close($conn);
		   }
	}

if(strcmp($R_paw,$R_paws)!=0){
	echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>";
	echo "<script charset='utf-8' language='javascript'>alert('两次输入密码不一样，请重新输入！'); history.back(); form2.password_s.focus(); </script>";
	exit();
}else{
$obj=new chkinput2(trim($R_name),trim($R_paw),trim($R_paws),trim($R_email),trim($R_qq));   //去除接收的信息的前后空字符
$obj->checkinput2();
}
?>