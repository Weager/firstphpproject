<?php // content="text/plain; charset=utf-8"
require_once ('src/jpgraph.php');
require_once ('src/jpgraph_bar.php');
require_once ('dbconf.php');
session_start();
	 	$uname=isset($_SESSION["username"])?$_SESSION["username"]:"";
	if($uname!=NULL){
	$conn=mysqli_connect($DBHOST,$DBUSER,$DBPWD,$DBNAME);
	mysqli_select_db($conn,$DBNAME);
	$tablename="history".$uname;
	$sqla="SELECT * FROM $tablename";
	$res=mysqli_query($conn,$sqla);
	$numrows=mysqli_num_rows($res);    //确定结果集中的记录数
	if($numrows>=7){
	$sql=mysqli_query($conn,"SELECT * FROM $tablename ORDER BY id DESC LIMIT 0,7");   //行数大于7时查询表
	$j=0;
	while($row=mysqli_fetch_row($sql)){	
			$sum=0;
			for($i=2;$i<26;$i++){
			$sum+=$row[$i];      //遍历数组并求和得到一天的总步数
		     }
		$datay[6-$j]=$sum;    //反序存储
		$j++;
		}
	}
	elseif($numrows>0 && $numrows<7){
		$sql=mysqli_query($conn,"SELECT * FROM $tablename");    //行数小于7时，将之全部取出
		$j=0;
		while($row=mysqli_fetch_row($sql)){
						for($a=0;$a<7-$numrows;$a++){         //为空的地方赋0
				$datay[$a]=0;
			}
		    	$sum=0;
			    for($i=2;$i<26;$i++){
			    $sum+=$row[$i];      //遍历数组并求和得到一天的总步数
		        }
		     $datay[7-$numrows+$j]=$sum;     //从后面开始存储
			 $j+=1;
		      }
	}
	else{
		$datay=array(0,0,0,0,0,0,0);     //为空时，只显示坐标轴
	}
}
// Create the graph. These two calls are always required
$graph = new Graph(500,400);
$graph->SetScale('textlin');
 
// Add a drop shadow
$graph->SetShadow();
 
// Adjust the margin a bit to make more room for titles
$graph->SetMargin(40,30,20,40);
 
// Create a bar pot
$bplot = new BarPlot($datay);
 
// Adjust fill color
$bplot->SetFillColor('orange');
$graph->Add($bplot);
 
// Setup the titles
$graph->title->Set('A Week Step-Data graph');
$graph->xaxis->title->Set('Weekday');
$graph->yaxis->title->Set('Total-Steps');
 
$graph->title->SetFont(FF_FONT1,FS_BOLD);
$graph->yaxis->title->SetFont(FF_FONT1,FS_BOLD);
$graph->xaxis->title->SetFont(FF_FONT1,FS_BOLD);
 
// Display the graph
$graph->Stroke();
?>
