<?php

include_once "../include/function.inc.php";
header("Content-Type:application/json;charset=utf-8");
__conn('localhost','root','root','anqauan');

$n=$_POST['n'];
$p=$_POST['p'];
$tt=$_POST['t'];
$app=array();
$count=count($n);



for($i=0;$i<$count;$i++){
	$app[]="'".$n[$i]."','".$p[$i]."',".$tt[$i];
}

	$ss="(";
	for ($i=0; $i < count($n)-1; $i++) {
	$ss.= $app[$i]."),("; 
		# code...
	}
	$ss.=$app[$i].")";

	$sql1="INSERT INTO xxx(name, daan, lx) VALUES ".$ss;

	mysql_query($sql1);
	echo '{"success":true,"msg":"共:'.$count."条记录 插入".mysql_affected_rows()."条记录".'"}';
