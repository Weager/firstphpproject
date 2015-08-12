<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>体育健身信息平台——首页</title>
<style type="text/css">
body,td,th {
	font-family: "华文仿宋";
	font-size: 16px;
	color: #000;
	font-weight: bold;
}
body {
	background-color: #FFF;
	color: #FFF;
}
a {
	font-family: "华文仿宋";
	font-size: 16px;
	color: #33F;
	font-weight: bold;
}
a:visited {
	color: #33F;
}
a:active {
	color: #906;
}
</style>
<meta name="" content="体育健身信息平台欢迎您！" />
<meta name="Keywords" content="体育，健身，信息平台" />
</head>

<body>
<table width="960" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="720" height="30" colspan="2" align="center" valign="middle" nowrap="nowrap" bgcolor="#993399"><?php include("naviselect.php"); ?></td>
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
<table width="960" height="640" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td> 
  <script type="text/javascript">
  window.onload=function(){
   var oTab=document.getElementById("tab-wrap");
   var oList=oTab.getElementsByTagName("ul")[0];
   var aLi=oTab.getElementsByTagName("li");
   var aImg=oTab.getElementsByTagName("img");
   var aDiv=oTab.getElementsByTagName("div");
   var sWidth=aImg[0].offsetHeight;
   var index=i=0;
   var timer=playTimer=null;
   var bOrder=true;
   var aTmp=[];
   var aLib=[0];
   var aClor=[["#DF2526","#00B5E4"],["#AAC901","#DF2018"],["#07FFF1","#FF650F"],["#9670C3","#49BCFD"]];
   //
   for(i=0;i<aLi.length;i++){
    aTmp.push("<li></li>")
   }
   var oCount=document.createElement("ul");
   oCount.className="count";
   oCount.innerHTML=aTmp.join("");
   oTab.appendChild(oCount);
   //
   var aBtn=oTab.getElementsByTagName("ul")[1].getElementsByTagName("li");
   for(i=0;i<aBtn.length;i++){
    aBtn[i].index=i;
    aBtn[i].onclick=function(){
     index=this.index;
     aLib.push(index);
     if(aLib.length>2){aLib.shift()};
     for(i=0;i<aBtn.length;i++){
      aBtn[i].className="";
      aLi[i].style.zIndex=100;
      aLi[i].style.display="none";
     }
     aBtn[index].className="current";
     aLi[index].style.zIndex=200;
     aLi[index].style.top=sWidth+"px";
     aLi[index].style.display="block";
     aLi[aLib[0]].style.display="block";
     aLi[index].style.background=aClor[index][0];
     aDiv[index].style.background=aClor[index][1];
     if(aLib[0]!=aLib[1]){
      showMove(aLi[index])
     }else {
      aLi[index].style.top=0;
     }
     
    }
   }
   //
   aBtn[index].className="current";
   aLi[index].style.zIndex=200;
   aLi[index].style.background=aClor[index][0];
   aDiv[index].style.background=aClor[index][1];
   autoPlay();
   //
   oTab.onmouseover=function(){
    clearInterval(playTimer);
   }
   oList.onmouseout=function(){
    autoPlay();
   }
   //
   function autoPlay(){
    playTimer=setInterval(function(){
     index==aBtn.length-1 && (bOrder=false);
     index==0 && (bOrder=true);
     bOrder ? index++ : index--;
     //console.log(index);
     aBtn[index].onclick();
    },3000)
   }
   //
   function showMove(obj){
    clearInterval(timer);
    timer=setInterval(function(){
     doMove(obj)
    },30)
   }
   //
   function doMove(obj){
    var iSpeed=obj.offsetTop/10;
    iSpeed=iSpeed>0 ? Math.ceil(iSpeed) : Math.floor(iSpeed);
    obj.offsetTop<=0 ? clearInterval(timer) : obj.style.top=obj.offsetTop-iSpeed+"px";
   }
  } 
  </script>
  
  <!-- Site styles -->
  <link rel="stylesheet" type="text/css" href="lib/css/reset.css" />
  
  <style>
  body{text-align:center;font:12px/20px Arial;}
  #tab-wrap {width:100%;position:relative;overflow:hidden;}
  #tab-wrap .list {position:relative;height:640px;}
  #tab-wrap .list li {position:absolute;top:0;left:0;width:100%;height:640px;}
  #tab-wrap .list li img {margin:0 auto;width:960px;}
  #tab-wrap .list li .bg-right {position:absolute;top:0;right:0;width:50%;height:640px;z-index:-1;}
  #tab-wrap .count {position:absolute;left:50%;width:10px;height:100px;top:100px;margin-left:470px;z-index:300;}
  #tab-wrap .count li {float:left;width:10px;height:10px;background:#ccc;margin-bottom:10px;}
  #tab-wrap .count li:hover{cursor:pointer;}
  #tab-wrap .count li.current {background:#85BE2E;}
  </style>
 </head>
 <body>
  <div id="tab-wrap">
   <ul class="list">
    <li><img src="Images/index1.jpg" width="960" height="640" />
      <div class="bg-right"></div>
    </li>
    <li><img src="Images/index2.jpg" width="960" height="640" />
      <div class="bg-right"></div>
    </li>
    <li><img src="Images/index3.jpg" width="960" height="640" /></li>
    <div class="bg-right"></div>
    </ul>
  </div>
 </td>
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
</body>
</html>
