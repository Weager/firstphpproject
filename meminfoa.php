<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>会员信息</title>
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
        <td width="760" height="30" align="center" valign="middle"><form id="form1" name="form1" method="post" action="updateinfo.php">
          <table width="760" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td height="30" colspan="2" align="center" valign="middle">健身会员详细信息</td>
              </tr>
            <tr>
              <td height="30" colspan="2" align="center" valign="middle">&nbsp;</td>
              </tr>
            <tr>
              <td width="250" height="30" align="center" valign="middle">用户昵称：</td>
              <td width="510" height="30" align="left" valign="middle"><label for="textfield"><?php echo $_SESSION["username"]; ?></label></td>
            </tr>
            <tr>
              <td width="250" height="30" align="center" valign="middle">真实姓名：</td>
              <td width="510" height="30" align="left" valign="middle"><label for="textfield2"></label>
                <input name="truename" type="text" id="textfield2" value="<?php include('truename.php');?>" />
                
				</td>
            </tr>
            <tr>
              <td width="250" height="30" align="center" valign="middle">性别：</td>
              <td width="510" height="30" align="left" valign="middle"><label for="select"></label><?php include("sexselect.php"); ?>
                <select name="sex" id="select">
                <option value="0" <?php echo $zero; ?>>&nbsp;</option> 
                  <option value="1"<?php echo $one; ?>>男</option>
                  <option value="2"<?php echo $two; ?>>女</option>
                </select>
                &nbsp;<font color="#ff0000">*</font></td>
            </tr>
            <tr>
              <td width="250" height="30" align="center" valign="middle">年龄：</td>
              <td width="510" height="30" align="left" valign="middle"><label for="textfield3"></label>
                <input type="text" name="age" id="textfield3"onblur=if(isNaN(this.value)){alert("年龄必须是数字！");tis.select();} value="<?php  $sql=mysqli_query($conn,"SELECT * FROM meminfo WHERE username='".$uname."'");
          $row=mysqli_fetch_row($sql);
	      echo $row[4]; ?>" />
                &nbsp;<font color="#ff0000">*</font></td>
            </tr>
            <tr>
              <td width="250" height="30" align="center" valign="middle">出生日期：</td>
              <td width="510" height="30" align="left" valign="middle"><?php include("birthselect.php"); ?><label for="select2"></label>
                <select name="birthy" id="select2">
                  <OPTION value="0" <?php echo $zero; ?>>&nbsp;</OPTION> 
                  <OPTION value="2015"<?php echo $y2015; ?>>2015</OPTION>
                  <OPTION value="2014"<?php echo $y2014; ?>>2014</OPTION>
                  <OPTION value="2013"<?php echo $y2013; ?>>2013</OPTION>
                  <OPTION value="2012"<?php echo $y2012; ?>>2012</OPTION>
                  <OPTION value="2011"<?php echo $y2011; ?>>2011</OPTION>
                  <OPTION value="2010"<?php echo $y2010; ?>>2010</OPTION>
                  <OPTION value="2009"<?php echo $y2009; ?>>2009</OPTION>
                  <OPTION value="2008"<?php echo $y2008; ?>>2008</OPTION>
                  <OPTION value="2007"<?php echo $y2007; ?>>2007</OPTION>
                  <OPTION value="2006"<?php echo $y2006; ?>>2006</OPTION>
                  <OPTION value="2005"<?php echo $y2005; ?>>2005</OPTION>
                  <OPTION value="2004"<?php echo $y2004; ?>>2004</OPTION>
                  <OPTION value="2003"<?php echo $y2003; ?>>2003</OPTION>
                  <OPTION value="2002"<?php echo $y2002; ?>>2002</OPTION>
                  <OPTION value="2001"<?php echo $y2001; ?>>2001</OPTION>
                  <OPTION value="2000"<?php echo $y2000; ?>>2000</OPTION>
                  <OPTION value="1999"<?php echo $y1999; ?>>1999</OPTION>
                  <OPTION value="1998"<?php echo $y1998; ?>>1998</OPTION>
                  <OPTION value="1997"<?php echo $y1997; ?>>1997</OPTION>
                  <OPTION value="1996"<?php echo $y1996; ?>>1996</OPTION>
                  <OPTION value="1995"<?php echo $y1995; ?>>1995</OPTION>
                  <OPTION value="1994"<?php echo $y1994; ?>>1994</OPTION>
                  <OPTION value="1993"<?php echo $y1993; ?>>1993</OPTION>
                  <OPTION value="1992"<?php echo $y1992; ?>>1992</OPTION>
                  <OPTION  value="1991"<?php echo $y1991; ?>>1991</OPTION>
                  <OPTION value="1990"<?php echo $y1990; ?>>1990</OPTION>
                  <OPTION value="1989"<?php echo $y1989; ?>>1989</OPTION>
                  <OPTION value="1988"<?php echo $y1988; ?>>1988</OPTION>
                  <OPTION value="1987"<?php echo $y1987; ?>>1987</OPTION>
                  <OPTION value="1986"<?php echo $y1986; ?>>1986</OPTION>
                  <OPTION value="1985"<?php echo $y1985; ?>>1985</OPTION>
                  <OPTION value="1984"<?php echo $y1984; ?>>1984</OPTION>
                  <OPTION value="1983"<?php echo $y1983; ?>>1983</OPTION>
                  <OPTION value="1982"<?php echo $y1982; ?>>1982</OPTION>
                  <OPTION value="1981"<?php echo $y1981; ?>>1981</OPTION>
                  <OPTION value="1980"<?php echo $y1980; ?>>1980</OPTION>
                  <OPTION value="1979"<?php echo $y1979; ?>>1979</OPTION>
                  <OPTION value="1978"<?php echo $y1978; ?>>1978</OPTION>
                  <OPTION value="1977"<?php echo $y1977; ?>>1977</OPTION>
                  <OPTION value="1976"<?php echo $y1976; ?>>1976</OPTION>
                  <OPTION value="1975"<?php echo $y1975; ?>>1975</OPTION>
                  <OPTION value="1974"<?php echo $y1974; ?>>1974</OPTION>
                  <OPTION value="1973"<?php echo $y1973; ?>>1973</OPTION>
                  <OPTION value="1972"<?php echo $y1972; ?>>1972</OPTION>
                  <OPTION value="1971"<?php echo $y1971; ?>>1971</OPTION>
                  <OPTION value="1970"<?php echo $y1970; ?>>1970</OPTION>
                  <OPTION value="1969"<?php echo $y1969; ?>>1969</OPTION>
                  <OPTION value="1968"<?php echo $y1968; ?>>1968</OPTION>
                  <OPTION value="1967"<?php echo $y1967; ?>>1967</OPTION>
                  <OPTION value="1966"<?php echo $y1966; ?>>1966</OPTION>
                  <OPTION value="1965"<?php echo $y1965; ?>>1965</OPTION>
                  <OPTION value="1964"<?php echo $y1964; ?>>1964</OPTION>
                  <OPTION value="1963"<?php echo $y1963; ?>>1963</OPTION>
                  <OPTION value="1962"<?php echo $y1962; ?>>1962</OPTION>
                  <OPTION value="1961"<?php echo $y1961; ?>>1961</OPTION>
                  <OPTION value="1960"<?php echo $y1960; ?>>1960</OPTION>
                  <OPTION value="1959"<?php echo $y1959; ?>>1959</OPTION>
                  <OPTION value="1958"<?php echo $y1958; ?>>1958</OPTION>
                  <OPTION value="1957"<?php echo $y1957; ?>>1957</OPTION>
                  <OPTION value="1956"<?php echo $y1956; ?>>1956</OPTION>
                  <OPTION value="1955"<?php echo $y1955; ?>>1955</OPTION>
                  <OPTION value="1954"<?php echo $y1954; ?>>1954</OPTION>
                  <OPTION value="1953"<?php echo $y1953; ?>>1953</OPTION>
                  <OPTION value="1952"<?php echo $y1952; ?>>1952</OPTION>
                  <OPTION value="1951"<?php echo $y1951; ?>>1951</OPTION>
                  </SELECT>
                年
                <label for="select3"></label>
                <select name="birthm" id="birthm" 
        onchange="showbirthday();">
                  <option value="0"<?php echo $m0; ?>>&nbsp;</option>
                  <option 
        value="1"<?php echo $m1; ?>>1</option>
                  <option value="2"<?php echo $m2; ?>>2</option>
                  <option 
        value="3"<?php echo $m3; ?>>3</option>
                  <option value="4"<?php echo $m4; ?>>4</option>
                  <option 
        value="5"<?php echo $m5; ?>>5</option>
                  <option value="6"<?php echo $m6; ?>>6</option>
                  <option 
        value="7"<?php echo $m7; ?>>7</option>
                  <option value="8"<?php echo $m8; ?>>8</option>
                  <option 
        value="9"<?php echo $m9; ?>>9</option>
                  <option value="10"<?php echo $m10; ?>>10</option>
                  <option 
        value="11"<?php echo $m11; ?>>11</option>
                  <option value="12"<?php echo $m12; ?>>12</option>
                </select>
月
<label for="select4"></label>
                <SELECT 
      name="birthd" id="birthd"><OPTION value="0"<?php echo $d0; ?>>&nbsp;</OPTION> <OPTION 
        value="1"<?php echo $d1; ?>>1</OPTION><OPTION value="2"<?php echo $d2; ?>>2</OPTION><OPTION 
        value="3"<?php echo $d3; ?>>3</OPTION><OPTION value="4"<?php echo $d4; ?>>4</OPTION><OPTION 
        value="5"<?php echo $d5; ?>>5</OPTION><OPTION value="6"<?php echo $d6; ?>>6</OPTION><OPTION 
        value="7"<?php echo $d7; ?>>7</OPTION><OPTION value="8"<?php echo $d8; ?>>8</OPTION><OPTION 
        value="9"<?php echo $d9; ?>>9</OPTION><OPTION value="10"<?php echo $d10; ?>>10</OPTION><OPTION 
        value="11"<?php echo $d11; ?>>11</OPTION><OPTION value="12"<?php echo $d12; ?>>12</OPTION><OPTION 
        value="13"<?php echo $d13; ?>>13</OPTION><OPTION value="14"<?php echo $d1; ?>>14</OPTION><OPTION 
        value="15"<?php echo $d15; ?>>15</OPTION><OPTION value="16"<?php echo $d16; ?>>16</OPTION><OPTION 
        value="17"<?php echo $d17; ?>>17</OPTION><OPTION value="18"<?php echo $d18; ?>>18</OPTION><OPTION 
        value="19"<?php echo $d19; ?>>19</OPTION><OPTION value="20"<?php echo $d20; ?>>20</OPTION><OPTION 
        value="21"<?php echo $d21; ?>>21</OPTION><OPTION value="22"<?php echo $d22; ?>>22</OPTION><OPTION 
        value="23"<?php echo $d23; ?>>23</OPTION><OPTION value="24"<?php echo $d24; ?>>24</OPTION><OPTION 
        value="25"<?php echo $d25; ?>>25</OPTION><OPTION value="26"<?php echo $d26; ?>>26</OPTION><OPTION 
        value="27"<?php echo $d27; ?>>27</OPTION><OPTION value="28"<?php echo $d28; ?>>28</OPTION><OPTION 
        value="29"<?php echo $d29; ?>>29</OPTION><OPTION value="30"<?php echo $d30; ?>>30</OPTION><OPTION 
        value="31"<?php echo $d31; ?>>31</OPTION></SELECT>
                日&nbsp;<font color="#ff0000">*</font></td>
            </tr>
            <tr>
              <td width="250" height="30" align="center" valign="middle">家庭地址：</td>
              <td width="510" height="30" align="left" valign="middle"><?php include("addrselect.php"); ?><label for="select3"></label>
                <select name="addressa" id="select3">
                <OPTION value="0"<?php echo $pdu; ?>>&nbsp;</OPTION> 
                 <option value="A"<?php echo $pa; ?>>江苏</option>
                  <option value="B"<?php echo $pb; ?>>湖北</option>
                  <option value="C"<?php echo $pc; ?>>上海</option>
                  <option value="D"<?php echo $pd; ?>>北京</option>
                  <option  value="E"<?php echo $pe; ?>>湖南</option>
                  <option value="F"<?php echo $pf; ?>>广东</option>
                  <option value="G"<?php echo $pg; ?>>四川</option>
                  <option value="H"<?php echo $ph; ?>>重庆</option>
                  <option value="I"<?php echo $pi; ?>>天津</option>
                  <option value="J"<?php echo $pj; ?>>浙江</option>
                  <option value="K"<?php echo $pk; ?>>安徽</option>
                  <option value="L"<?php echo $pl; ?>>江西</option>
                  <option value="M"<?php echo $pm; ?>>福建</option>
                </select>
                省
                <label for="select4"></label>
                <select name="addressb" id="select4">
                <OPTION value="0"<?php echo $cdu; ?>>&nbsp;</OPTION> 
                 <option value="A"<?php echo $ca; ?>>南京</option>
                  <option value="B"<?php echo $cb; ?>>北京</option>
                  <option value="C"<?php echo $cc; ?>>上海</option>
                  <option value="D"<?php echo $cd; ?>>武汉</option>
                  <option value="E"<?php echo $ce; ?>>重庆</option>
                  <option value="F"<?php echo $cf; ?>>天津</option>
                  <option value="G"<?php echo $cg; ?>>苏州</option>
                  <option value="H"<?php echo $ch; ?>>广州</option>
                  <option value="I"<?php echo $ci; ?>>杭州</option>
                  <option value="J"<?php echo $cj; ?>>合肥</option>
                  <option value="K"<?php echo $ck; ?>>天津</option>
                  <option value="L"<?php echo $cl; ?>>常州</option>
                  <option value="M"<?php echo $cm; ?>>无锡</option>
                </select>
                市</td>
            </tr>
            <tr>
              <td width="250" height="30" align="center" valign="middle">手机号码：</td>
              <td width="510" height="30" align="left" valign="middle"><label for="textfield4"></label>
                <input type="text" name="mobile" id="textfield4" onblur=if(isNaN(this.value)){alert("手机号码必须是数字！");tis.select();} value="<?php  $sql=mysqli_query($conn,"SELECT * FROM meminfo WHERE username='".$uname."'");
          $row=mysqli_fetch_row($sql);
	      echo $row[8]; ?>"/></td>
            </tr>
            <tr>
              <td width="250" height="30" align="center" valign="middle">文化程度：</td>
              <td width="510" height="30" align="left" valign="middle"><?php include("eduselect.php"); ?><label for="select5"></label>
                <select name="education" id="select5">
                <OPTION value="0"<?php echo $zero; ?>>&nbsp;</OPTION> 
                  <option value="1"<?php echo $one;?>>小学</option>
                  <option value="2"<?php echo $two;?>>初中</option>
                  <option value="3"<?php echo $three;?>>高中</option>
                  <option value="4"<?php echo $four;?>>大学</option>
                  <option value="5"<?php echo $five;?>>研究生</option>
                  <option value="6"<?php echo $six;?>>博士</option>
                  <option value="7"<?php echo $seven;?>>院士</option>
                  <option value="8"<?php echo $eight;?>>行业专家</option>
                </select></td>
            </tr>
            <tr>
              <td width="250" height="30" align="center" valign="middle">职业：</td>
              <td width="510" height="30" align="left" valign="middle"><?php include("carselect.php"); ?><label for="select6"></label>
                <select name="career" id="select6">
                <OPTION value="0"<?php echo $zero; ?>>&nbsp;</OPTION> 
                  <option value="1"<?php echo $one; ?>>国家机关、企事业单位</option>
                  <option value="2"<?php echo $two; ?>>专业技术人员</option>
                  <option value="3"<?php echo $three; ?>>商业服务人员</option>
                  <option value="4"<?php echo $four; ?>>生产技术人员</option>
                  <option value="5"<?php echo $five; ?>>军人</option>
                  <option value="6"<?php echo $six; ?>>自由职业者</option>
                  <option value="7"<?php echo $seven; ?>>教育工作者</option>
                  <option value="8"<?php echo $eight; ?>>体育从业者</option>
                </select></td>
            </tr>
            <tr>
              <td width="250" height="30" align="center" valign="middle">身高：</td>
              <td width="510" height="30" align="left" valign="middle"><label for="textfield5"></label>
                <input type="text" name="height" id="textfield5" onblur=if(isNaN(this.value)){alert("身高必须是数字！");tis.select();} value="<?php  $sql=mysqli_query($conn,"SELECT * FROM meminfo WHERE username='".$uname."'");
          $row=mysqli_fetch_row($sql);
	      echo $row[11]; ?>"/>
                CM&nbsp;&nbsp; <font color="#ff0000">*</font></td>
            </tr>
            <tr>
              <td width="250" height="30" align="center" valign="middle">体重：</td>
              <td width="510" height="30" align="left" valign="middle"><label for="textfield6"></label>
                <input type="text" name="weight" id="textfield6" onblur=if(isNaN(this.value)){alert("体重必须是数字！");tis.select();} value="<?php  $sql=mysqli_query($conn,"SELECT * FROM meminfo WHERE username='".$uname."'");
          $row=mysqli_fetch_row($sql);
	      echo $row[12]; ?>" />
                KG&nbsp;&nbsp; <font color="#ff0000">*</font></td>
            </tr>
            <tr>
              <td width="250" height="30" align="center" valign="middle">资料上次更新时间：</td>
              <td width="510" height="30" align="left" valign="middle"><label for="textfield7"><?php include("querylasttime.php"); ?></label></td>
            </tr>
            <tr>
              <td width="250" height="30" align="center" valign="middle">&nbsp;</td>
              <td width="510" height="30" align="right" valign="middle">带有<font color="#ff0000">*</font>的为必填项&nbsp;&nbsp;</td>
            </tr>
            <tr>
              <td width="250" height="30" align="center" valign="middle">&nbsp;</td>
              <td width="510" height="30" align="left" valign="middle">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="submit" name="submit" id="button" value="更新资料" onclick="return check(form1)" />
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
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
