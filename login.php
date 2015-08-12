<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>健身会员登陆、注册页面</title>
<script src="SpryAssets/SpryTabbedPanels.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationPassword.js" type="text/javascript"></script>
<style type="text/css">
body,td,th {
	font-family: "华文仿宋";
	font-size: 16px;
	color: #000;
	font-weight: bold;
	border-top-width: 2px;
	border-right-width: 0px;
	border-bottom-width: 0px;
	border-left-width: 0px;
	border-top-style: none;
	border-right-style: none;
	border-bottom-style: none;
	border-left-style: none;
	border-top-color: #993399;
	border-right-color: #993399;
	border-bottom-color: #993399;
	border-left-color: #993399;
}
body {
	background-color: #fff;
}
a {
	font-family: "华文仿宋";
	font-size: 16px;
	color: #33f;
}
a:visited {
	color: #33f;
}
a:active {
	color: #906;
}
</style>
<link href="SpryAssets/SpryTabbedPanels.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationPassword.css" rel="stylesheet" type="text/css" />
</head>

<body>
<table width="960" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="720" height="30" colspan="2" align="center" valign="middle" nowrap="nowrap" bgcolor="#993399"><?php include("navigation1.php"); ?></td>
  </tr>
</table>
<table width="960" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="720"><div align="left"></div></td>
  </tr>
</table>
<div align="center" >
  <table width="960" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>    </tr>
  </table>
</div>
<table width="960" height="600" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="480" height="600" align="center" valign="middle" bgcolor="#FFFFFF"><img src="Images/login.jpg" width="480" height="600" /></td>
    <td width="80" height="600" align="center" valign="middle" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="320" height="600" align="center" nowrap="nowrap" bgcolor="#FFFFFF"><div id="TabbedPanels1" class="TabbedPanels">
      <ul class="TabbedPanelsTabGroup">
        <li class="TabbedPanelsTab" tabindex="0">会员登陆</li>
        <li class="TabbedPanelsTab" tabindex="0">用户注册</li>
      </ul>
      <div class="TabbedPanelsContentGroup">
        <div class="TabbedPanelsContent"><a name="memlog">
          <form id="form1" name="form1" method="post" action="logincheck.php">
            <br />
            <br />
            <br />
            <br />
            用户昵称：<span id="sprytextfield1">
            <label for="username"></label>
            <input name="username" type="text" id="username" size="20" maxlength="20" />
            <span class="textfieldMinCharsMsg">最小为6个字符</span><span class="textfieldMaxCharsMsg">最多20个字符</span></span>
            <p>登陆密码：<span id="sprypassword1">
            <label for="password"></label>
            <input name="password" type="password" id="password" size="20" maxlength="18" />
            <span class="passwordMinCharsMsg">最小为6个字符</span><span class="passwordMaxCharsMsg">最多18个字符</span></span></p>
            <p>
              <label for="checkbox"></label>
              <input name="checkbox" type="checkbox" id="checkbox" checked="checked" />
              保存登陆信息
            </p>
            <p>
              <input  type="submit" name="button" id="button" value="登陆" />
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="reset" name="button2" id="button2" value="重置" />
            </p>
            <p><a href="#" target="_new">忘记密码？ </a></p>
<p>&nbsp;</p>
          </form></a>
        </div>
        <div class="TabbedPanelsContent"><a name="memreg">
          <form id="form2" name="form2" method="post" action="registercheck.php">
                        <br />
                        <br />
                        <br />
                        <br />
              用户昵称：<span id="sprytextfield2">
            <label for="username"></label>
            <input name="username" type="text" id="username" size="20" maxlength="20" />
              </span>
              <p>登陆密码：<span id="sprytextfield3">
            <label for="text2"></label>
            <input name="password" type="password" id="text2" size="20" maxlength="18" />
            <span class="textfieldMaxCharsMsg">最大18个字符</span><span class="textfieldMinCharsMsg">最小6个字符</span></span></p>
            <p>确认密码：<span id="sprytextfield4">
            <label for="text3"></label>
            <input name="password_s" type="password" id="text3" size="20" maxlength="18" />
            <span class="textfieldMaxCharsMsg">最大18个字符</span><span class="textfieldMinCharsMsg">最小6个字符</span></span></p>
            <p>用户邮箱：<span id="sprytextfield5">
            <label for="text4"></label>
            <input name="email" type="text" id="text4" size="20" maxlength="20" />
            <span class="textfieldMinCharsMsg">最小6字符</span><span class="textfieldInvalidFormatMsg">格式无效</span></span></p>
            <p>用户 Q Q：<span id="sprytextfield6">
            <label for="text5"></label>
            <input name="m_qq" type="text" id="text5" size="20" maxlength="18" />
            <span class="textfieldInvalidFormatMsg">格式无效</span><span class="textfieldMaxCharsMsg">最大18字符</span></span></p>
            <p>
              <input name="checkbox2" type="checkbox" id="checkbox2" checked="checked" />
              <label for="checkbox2"></label>
            我同意并阅读了服务条款</p>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input type="submit" name="button3" id="button3" value="提交注册" />
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="reset" name="button4" id="button4" value="重置信息" />
            </p>
          </form></a>
        </div>
      </div>
    </div></td>
    <td width="80" height="600" align="center" valign="middle" bgcolor="#FFFFFF">&nbsp;</td>
  </tr>
</table>
<table width="960" border="0" align="center" cellpadding="0" cellspacing="3">
  <tr>
    <td width="720" align="center" valign="middle"><?php include("copyright.php"); ?></td>
  </tr>
</table>
<div align="center" >
  <table width="960" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr> </tr>
  </table>
</div>
<script type="text/javascript">
var TabbedPanels1 = new Spry.Widget.TabbedPanels("TabbedPanels1");
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1", "none", {maxChars:20, minChars:6});
var sprypassword1 = new Spry.Widget.ValidationPassword("sprypassword1", {minChars:6, maxChars:18});
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2", "none", {maxChars:20, minChars:6, validateOn:["change"]});
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3", "none", {maxChars:18, minChars:6, validateOn:["change"]});
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4", "none", {validateOn:["change"], minChars:6, maxChars:18});
var sprytextfield5 = new Spry.Widget.ValidationTextField("sprytextfield5", "email", {minChars:6, maxChars:20, validateOn:["change"]});
var sprytextfield6 = new Spry.Widget.ValidationTextField("sprytextfield6", "integer", {validateOn:["change"], minChars:2, maxChars:18});
</script>
</body>
</html>
