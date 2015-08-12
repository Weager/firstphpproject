<?php
session_start();
$uname=isset($_SESSION["username"])?$_SESSION["username"]:"";   //先判断是否已经设置变量，再确定其它动作
if($uname==""){
       include("navigation1.php");
	   }
else {
	 include("navigation2.php");
}
?> 