<?php
            require_once("dbconf.php");
           $conn=mysqli_connect($DBHOST,$DBUSER,$DBPWD,$DBNAME) or die("数据库连接失败:".mysqli_connect_error());
           mysqli_select_db($conn,$DBNAME) or die("数据库选择错误：".mysqli_connect_error());
           mysqli_query($conn,'set character set utf8');
		   mysqli_query($conn,'set names utf8');
?>
