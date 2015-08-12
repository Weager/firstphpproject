<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>会员运动数据</title>
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
function check(form){
	if(form.sex.value==""){
		alert("请选择性别！");form.sex.focus();return false;
	}
	if(form.age.value==""){
		alert("请输入年龄！");form.age.focus();return false;
	}
	if(form.birthy.value=="0"){
		alert("请选择出生年份！");form.birthy.focus();return false;
	}
	if(form.birthm.value=="0"){
		alert("请选择出生月份！");form.birthm.focus();return false;
	}if(form.birthd.value=="0"){
		alert("请选择出生日！");form.birthd.focus();return false;
	}
	if(form.height.value==""){
		alert("请输入你的身高！");form.height.focus();return false;
	}
	if(form.weight.value==""){
		alert("请输入你的体重！");form.weight.focus();return false;
	}
	form.submit();
}
</script>

<body>
<table style=" position:absolute;left:500px;top:300px;" width="760" height="136" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="960" height="250" align="center" valign="top" bgcolor="#FFFFFF"><table width="760" border="0" align="right" cellspacing="0" cellpadding="0">
      <tr>
        <td width="760" height="30" align="center" valign="middle"><form id="form1" name="form1" method="post" action="">
          <table width="760" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td width="760" height="30" colspan="3" align="center" valign="middle"><font color="#993399">您最近一周运动步数统计图</font></td>
              </tr>
            <tr>
              <td height="30" colspan="3" align="center" valign="middle"><img src="wsportgraph.php" hspace="0" vspace="0" align="center" ></td>
              </tr>
            <tr>
              <td height="30" colspan="3" align="center" valign="middle"><font color="#993399">您今天各时间段运动步数折线图</font></td>
              </tr>
            <tr>
              <td height="30" colspan="3" align="center" valign="middle"><label for="textfield2"><img src="dstepgraph.php" hspace="0" vspace="0" align="center" ></label></td>
              </tr>
            <tr>
              <td height="30" colspan="3" align="center" valign="middle"><label for="select"><font color="#993399">您今天各时间段运动里程折线图</font></label></td>
              </tr>
            <tr>
              <td height="30" colspan="3" align="center" valign="middle"><label for="textfield3"><img src="ddistgraph.php" hspace="0" vspace="0" align="center" ></label></td>
              </tr>
            <tr>
              <td height="30" colspan="3" align="center" valign="middle"><font color="#993399">您今天各时间段消耗能量折线图</font></td>
              </tr>
            <tr>
              <td height="30" colspan="3" align="center" valign="middle"><img src="dheatgraph.php" hspace="0" vspace="0" align="center" ></td>
              </tr>
            <tr>
              <td height="30" colspan="3" align="left" valign="middle"><font color="#993399">今日运动数据：</font></td>
              </tr>
            <tr>
              <td width="253" height="30" align="left" valign="top"><img src="Images/step.png" width="60" height="60" />总步数：<?php include("dtotalstep.php"); ?>
                &nbsp;步</td>
              <td width="253" align="left" valign="middle"><img src="Images/dist.png" width="60" height="60" />总距离：<?php include("dtotaldist.php"); ?>
&nbsp;米</td>
              <td width="254" align="left" valign="middle"><img src="Images/heat.png" width="60" height="60" />总能量：<?php include("dtotalener.php"); ?>
&nbsp;千卡</td>
              </tr>
            <tr>
              <td height="30" colspan="3" align="left" valign="middle">&nbsp;</td>
            </tr>
            <tr>
              <td height="30" colspan="3" align="left" valign="middle"><font color="#993399">您今天的运动量等级：</font>&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;<?php include("sportrank.php"); ?></td>
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
