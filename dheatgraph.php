<?php // content="text/plain; charset=utf-8"
require_once ('src/jpgraph.php');
require_once ('src/jpgraph_line.php');
require_once ('dbconf.php');
 session_start();
	 	$uname=isset($_SESSION["username"])?$_SESSION["username"]:"";
	if($uname!=NULL){
	$conn=mysqli_connect($DBHOST,$DBUSER,$DBPWD,$DBNAME);
	mysqli_select_db($conn,$DBNAME);
	$tablename="history".$uname;
	$sql=mysqli_query($conn,"SELECT * FROM $tablename ORDER BY id DESC LIMIT 1");   //查询表
	$numrows=mysqli_num_rows($sql);    //确定结果集中的记录数
	if($numrows==1){
	$row=mysqli_fetch_row($sql);
	
    $data = array($row[2],$row[3],$row[4],$row[5],$row[6],$row[7],$row[8],$row[9],$row[10],$row[11],$row[12],$row[13],$row[14],$row[15],$row[16],$row[17],$row[18],$row[19],$row[20],$row[21],$row[22],$row[23],$row[24],$row[25]);
    $sqlm=mysqli_query($conn,"SELECT age FROM meminfo WHERE username='".$uname."'");  //查询表
	$rowb=mysqli_fetch_row($sqlm);      //返回数组
	$age=$rowb[0];
	if($age>0 && $age<15){
	$fac=0.015;
	}
	elseif($age>=15 && $age<25){
		$fac=0.025;
	}
	elseif($age>=25 && $age<45){
		$fac=0.05;
	}
	elseif($age>=45 && $age<60){
		$fac=0.045;
	}
	else{
		$fac=0.03;
	}
	$ydata=array();
	for($i=0;$i<24;$i++){
		$ydata[$i]=$data[$i]* $fac;
	}
	}
	else { $ydata=array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);    //为空时，只显示坐标轴
	}
	$sum=0;
	for($a=0;$a<24;$a++){
		
		$sum+=$ydata[$a];
	}
   $sql="UPDATE sportdata SET dtotalener='$sum' WHERE username='$uname'";         //更新sportdata表中的一个列
   $res=mysqli_query($conn,$sql);
   mysqli_close($conn);
	}
   
// Size of the overall graph
$width=500;
$height=400;
 
// Create the graph and set a scale.
// These two calls are always required
$graph = new Graph($width,$height);
$graph->SetScale('intlin');
$graph->SetShadow();
 
// Setup margin and titles
$graph->SetMargin(40,20,20,40);
$graph->title->Set('Today Heat-Use-Up Curve Graph');
$graph->xaxis->title->Set('Time');
$graph->yaxis->title->Set('Kcal');
 
$graph->yaxis->title->SetFont( FF_FONT1 , FS_BOLD );
$graph->xaxis->title->SetFont( FF_FONT1 , FS_BOLD );
 
$graph->yaxis->SetColor('blue');
 
// Create the linear plot
$lineplot=new LinePlot($ydata);
$lineplot->SetColor( 'blue' );
$lineplot->SetWeight( 2 );   // Two pixel wide
$lineplot->mark->SetType(MARK_UTRIANGLE);
$lineplot->mark->SetColor('blue');
$lineplot->mark->SetFillColor('red');
 
$lineplot->value->Show();
$lineplot->value->SetFont(FF_ARIAL,FS_BOLD,10);
$lineplot->value->SetColor('darkred');
$lineplot->value->SetFormat('(%d)');
 
// Add the plot to the graph
$graph->Add($lineplot);
 
// Display the graph
$graph->Stroke();
?>
