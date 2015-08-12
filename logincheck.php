<?php 
session_start();
$A_name=$_POST["username"];  //接收表单提交的用户名
$A_pwd=$_POST["password"];   //接收表单提交的密码

class chkinput {
	var $name;
	var $pwd;
	function chkinput($x,$y){
		$this->name=$x;
		$this->pwd=$y;
	}
	function checkinput(){
		include("conn.php"); //连接数据源
		$sql=mysqli_query($conn,"SELECT * FROM reginfo where username='".$this->name."'and password='".$this->pwd."'");
		$info=mysqli_fetch_array($sql);  //从结果集中取一行，看昵称与密码是否正确
		if($info==FALSE){
			echo "<script language='javascript'>alert('您输入的用户昵称未注册或者登陆密码错误！');window.location='login.php';</script>";
		}
		else {
			echo "<script>alert('登陆成功！'); window.location='index.php'; </script>";
			$_SESSION[username]=$info[username];
			}
	}
}
     $obj=new chkinput(trim($A_name),trim($A_pwd));   //去除用户名和密码前后的空字符
	 $obj->checkinput();
?>

		
