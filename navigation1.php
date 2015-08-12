<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>未登陆导航</title>
<style type="text/css">
body,td,th {
	font-family: "华文仿宋";
	font-size: 16px;
	color: #000;
	font-weight: bold;
}
body {
	background-color: #FFF;
}
a {
	font-family: "华文仿宋";
	font-size: 16px;
	color: #000;
	
}
a:link {
	color: #33F;
}
a:visited {
	color: #33F;
}
a:active {
	color: #906;
}
#menu {
	position:absolute;
	left:223px;
	top:210px;
	width:960px;
	height:30px;
	z-index:1;
	text-align: left;
	background-color: #FFFF00;
}
#menu1 {
	position:absolute;
	left:223px;
	top:240px;
	width:136px;
	height:60px;
	z-index:2;
	background-color: #FFFF00;
}
</style>
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />
</head>

<body>
<table width="960" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="30" colspan="2" align="center" valign="middle" nowrap="nowrap" bgcolor="#993399">&nbsp;</td>
  </tr>
  <tr>
    <td width="720" height="30" align="left" valign="middle" nowrap="nowrap">当前城市： 南京&nbsp;&nbsp; [<a href="#" target="_new" >切换城市</a>]</td>
    <td align="center" nowrap="nowrap"><script type=text/javascript>
document.write("<span id='labtime' width='120px' Font-Size='9pt'></span>")
setInterval("labtime.innerText=new Date().toLocaleString()",1000)
</script></td>
  </tr>
</table>
<table width="960" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="720" height="30" align="center" valign="middle" nowrap="nowrap">★★★★★ 科学健身 幸福生活 ★★★★★</td>
    <td align="left" valign="middle" nowrap="nowrap"><table width="240" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="240" height="15" colspan="2" align="center" valign="middle">&nbsp;</td>
        </tr>
      <tr valign="top">
        <td width="120" height="15" align="center"><a  href="login.php#memreg">用户注册</a></td>
        <td width="120" align="center"><a href="login.php#memlog">会员登陆</a></td>
        </tr>
    </table></td>
  </tr>
  <tr>
    <td colspan="2"><div align="left"><img src="Images/banner.gif" width="960" height="120" /></div></td>
  </tr>
</table>
<div align="center" >
  <table width="960" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td width="137" height="30" align="center" valign="middle" nowrap="nowrap" bgcolor="#993399"><ul id="MenuBar1" class="MenuBarHorizontal">
        <li name="menu"><a class="MenuBarItemSubmenu" href="index.php">健身资讯</a>
          <ul>
            <li><a href="#">健身新闻</a></li>
            <li><a href="#">健身时尚</a></li>
          </ul>
        </li>
        <li><a href="nanjing.php">健身地图</a></li>
        <li><a class="MenuBarItemSubmenu" href="#">健身课堂</a>
          <ul>
            <li><a href="#">图文解说</a></li>
            <li><a href="#">视频教程</a></li>
          </ul>
        </li>
        <li><a href="login.php" class="MenuBarItemSubmenu">会员之家</a>
          <ul>
            <li><a href="login.php">会员信息</a></li>
            <li><a href="login.php">体质测评</a></li>
            <li><a href="login.php">健身计划</a></li>
            <li><a href="login.php">运动数据</a></li>
          </ul>
        </li>
        <li><a href="#" class="MenuBarItemSubmenu">健身专家</a>
          <ul>
            <li><a href="#">健身问答</a></li>
            <li><a href="#">健身指导</a></li>
          </ul>
        </li>
        <li><a href="#" class="MenuBarItemSubmenu">健身圈子</a>
          <ul>
            <li><a href="#">社区活动</a></li>
          </ul>
        </li>
        <li><a href="#" class="MenuBarItemSubmenu">帮助中心</a>
          <ul>
            <li><a href="readme.php">平台说明</a></li>
            <li><a href="helpme.php">联系我们</a></li>
          </ul>
        </li>
      </ul></td>
    </tr>
  </table>
</div>
<script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
</script>
</body>
</html>
