<?php 
    require_once("src/jpgraph.php");
	require_once("src/jpgraph_bar.php"); 
	require_once('dbconf.php');
		session_start();
	 	$uname=isset($_SESSION["username"])?$_SESSION["username"]:"";
	if($uname!=NULL){
	$conn=mysqli_connect($DBHOST,$DBUSER,$DBPWD,$DBNAME);
	mysqli_select_db($conn,$DBNAME);
		$sqle=mysqli_query($conn,"SELECT * FROM evaluate WHERE username='".$uname."'");  //查询表
	$row=mysqli_fetch_row($sqle);      //返回数组
		$datamem=array($row[4],$row[5],$row[6],$row[7],$row[8],$row[9],$row[10]);
			$sqlm=mysqli_query($conn,"SELECT age FROM meminfo WHERE username='".$uname."'");  //查询表
	$rowb=mysqli_fetch_row($sqlm);      //返回数组
	$age=$rowb[0];
	$datamean=array();
		if($age>0 && $age<15){
	$datamean=array(8,105,68,13,120,400,10);
	}
	elseif($age>=15 && $age<25){
		$datamean=array(25,115,72,7,58,230,50);
	}
	elseif($age>=25 && $age<45){
		$datamean=array(35,117,75,6,50,210,70);
	}
	elseif($age>=45 && $age<60){
		$datamean=array(32,132,80,9,70,330,60);
	}
	else{
		$datamean=array(28,135,82,12,115,380,30);
	}
			
}
    
 //Create the graph. These two calls are always required
$graph = new Graph(500,400);    
$graph->SetScale("textlin");
$graph->SetShadow();
 
$graph->img->SetMargin(40,30,20,40);
 
// Create the bar plots
$b1plot = new BarPlot($datamem);
$b1plot->SetFillColor("orange");
$b2plot = new BarPlot($datamean);
$b2plot->SetFillColor("blue");
 
// Create the grouped bar plot
$gbplot = new GroupBarPlot(array($b1plot,$b2plot));
$gbplot->SetWidth(0.7);
 
// ...and add it to the graPH
$graph->Add($gbplot);
 
$graph->title->Set("Physical State Graph");
$graph->xaxis->title->Set("Item");
$graph->yaxis->title->Set("Data");
 
$graph->title->SetFont(FF_FONT1,FS_BOLD);
$graph->yaxis->title->SetFont(FF_FONT1,FS_BOLD);
$graph->xaxis->title->SetFont(FF_FONT1,FS_BOLD);
 
// Display the graph
$graph->Stroke();
?>

    