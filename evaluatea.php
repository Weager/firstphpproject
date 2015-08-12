<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>体质测评</title>
<style type="text/css">
    html,body{
	margin:0;
	padding:0;
	font-family: "华文仿宋";
	font-size: 16px;
	font-weight: bold;
	color: #000;
}
    .iw_poi_title {color:#CC5522;font-size:14px;font-weight:bold;overflow:hidden;padding-right:13px;white-space:nowrap}
    .iw_poi_content {font:12px arial,sans-serif;overflow:visible;padding-top:4px;white-space:-moz-pre-wrap;word-wrap:break-word}
</style>
</head>
<script language="javascript">
function disapeara(){
	document.getElementById("blood_high").value="";
}
function disapearb(){
	document.getElementById("blood_low").value="";
}
function check(form){
	if(form.capacity.value==""){
		alert("请输入肺活量！");form.capacity.focus();return false;
	}
	if(form.blood_high.value==""){
		alert("请输入收缩压！");form.blood_high.focus();return false;
	}
	if(form.blood_low.value==""){
		alert("请输入舒张压！");form.blood_low.focus();return false;
	}
	if(form.meters_short.value==""){
		alert("请输入50M跑所用时间！");form.meters_short.focus();return false;
	}if(form.meters_medium.value==""){
		alert("请输入400M跑所用时间！");form.meters_medium.focus();return false;
	}
	if(form.meters_max.value==""){
		alert("请输入1500M跑所用时间！");form.meters_max.focus();return false;
	}
	if(form.push_up.value==""){
		alert("请输入俯卧撑的个数！");form.push_up.focus();return false;
	}
	form.submit();
}
</script>

<body>
<table style=" position:absolute;left:500px;top:300px;" width="760" height="136" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="960" height="250" align="center" valign="top" bgcolor="#FFFFFF"><table width="760" border="0" align="right" cellspacing="0" cellpadding="0">
      <tr>
        <td width="760" height="30" align="center" valign="middle"><form id="form1" name="form1" method="post" action="evaluateupdate.php">
          <table width="760" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td height="30" colspan="2" align="center" valign="middle">健身会员体质测评</td>
              </tr>
            <tr>
              <td height="30" colspan="2" align="center" valign="middle">&nbsp;</td>
              </tr>
            <tr>
              <td width="250" height="30" align="center" valign="middle">用户昵称：</td>
              <td width="510" height="30" align="left" valign="middle"><label for="textfield"><?php echo $_SESSION["username"]; ?></label></td>
            </tr>
            <tr>
              <td width="250" height="30" align="center" valign="middle">会员身高：</td>
              <td width="510" height="30" align="left" valign="middle"><label for="textfield2"></label><?php include("evaluselect.php");?>
                &nbsp;CM</td>
            </tr>
            <tr>
              <td width="250" height="30" align="center" valign="middle">会员体重：</td>
              <td width="510" height="30" align="left" valign="middle"><label for="textfield8"></label><?php $sql=mysqli_query($conn,"SELECT weight FROM meminfo WHERE username='".$uname."'");  //查询表
	$row=mysqli_fetch_row($sql);      //返回数组
	echo $row[0]; ?>
                &nbsp;KG</td>
            </tr>
            <tr>
              <td width="250" height="30" align="center" valign="middle">会员年龄：</td>
              <td width="510" height="30" align="left" valign="middle"><label for="textfield3"><?php $sql=mysqli_query($conn,"SELECT age FROM meminfo WHERE username='".$uname."'");  //查询表
	$row=mysqli_fetch_row($sql);      //返回数组
	echo $row[0]; ?></label></td>
            </tr>
            <tr>
              <td width="250" height="30" align="center" valign="middle">肺活量：</td>
              <td width="510" height="30" align="left" valign="middle"><label for="textfield9"></label>
                <input type="text" name="capacity" id="textfield9" onblur=if(isNaN(this.value)){alert("肺活量必须是数字！");tis.select();} />                
                ×&nbsp;100ML</td>
            </tr>
            <tr>
              <td width="250" height="30" align="center" valign="middle">血压：</td>
              <td width="510" height="30" align="left" valign="middle"><label for="textfield10"></label>
                <input type="text" name="blood_high" id="blood_high" onclick="disapeara()" value="请输入收缩压" onblur=if(isNaN(this.value)){alert("收缩压必须是数字！");tis.select();}  />
                /
                <label for="textfield11"></label>
                <input type="text" name="blood_low" id="blood_low" onclick="disapearb()"  value="请输入舒张压" onblur=if(isNaN(this.value)){alert("收缩压必须是数字！");tis.select();}  />
                &nbsp;mmhg</td>
            </tr>
            <tr>
              <td width="250" height="30" align="center" valign="middle">50M跑：</td>
              <td width="510" height="30" align="left" valign="middle"><label for="textfield4"></label>
                <input type="text" name="meters_short" id="textfield4" onblur=if(isNaN(this.value)){alert("时间必须是数字！");tis.select();}  />
                &nbsp;S</td>
            </tr>
            <tr>
              <td width="250" height="30" align="center" valign="middle">400M跑：</td>
              <td width="510" height="30" align="left" valign="middle"><label for="textfield12"></label>
                <input type="text" name="meters_medium" id="textfield12" onblur=if(isNaN(this.value)){alert("时间必须是数字！");tis.select();}  />
                &nbsp;S</td>
            </tr>
            <tr>
              <td width="250" height="30" align="center" valign="middle">1500M跑：</td>
              <td width="510" height="30" align="left" valign="middle"><label for="textfield13"></label>
                <input type="text" name="meters_max" id="textfield13" onblur=if(isNaN(this.value)){alert("时间必须是数字！");tis.select();} />
                &nbsp;S</td>
            </tr>
            <tr>
              <td width="250" height="30" align="center" valign="middle">俯卧撑：</td>
              <td width="510" height="30" align="left" valign="middle"><label for="textfield14"></label>
                <input type="text" name="push_up" id="textfield14" onblur=if(isNaN(this.value)){alert("俯卧撑个数必须是数字！");tis.select();} />
&nbsp;个
<label for="textfield5"></label></td>
            </tr>
            <tr>
              <td width="250" height="30" align="center" valign="middle">&nbsp;</td>
              <td width="510" height="30" align="left" valign="middle"><label for="textfield6"></label></td>
            </tr>
            <tr>
              <td width="250" height="30" align="center" valign="middle">上次测评时间：</td>
              <td width="510" height="30" align="left" valign="middle"><label for="textfield7"><?php $sql=mysqli_query($conn,"SELECT last_evaluate FROM evaluate WHERE username='".$uname."'");  //查询表
	$row=mysqli_fetch_row($sql);      //返回数组
	echo $row[0]; ?>
              </label></td>
            </tr>
            <tr>
              <td width="250" height="30" align="center" valign="middle">&nbsp;</td>
              <td width="510" height="30" align="right" valign="middle">所有选项均为必填项&nbsp;&nbsp;</td>
            </tr>
            <tr>
              <td width="250" height="30" align="center" valign="middle">&nbsp;</td>
              <td width="510" height="30" align="left" valign="middle"><input type="submit" name="button" id="button" value="测评" onclick="return check(form1)"/>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="reset" name="button2" id="button2" value="重置" /></td>
            </tr>
          </table>
        </form></td>
        </tr>
    </table></td>
  </tr>
</table>
<div align="center" >
  <table width="960" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr> </tr>
  </table>
</div>
</body>
</html>
