<?php
include_once "../include/function.inc.php";
header("Content-Type:text/html;charset=utf-8");
__conn('localhost','root','root','anqauan');
$cc="xxx";
$sql="select id,name,daan,lx from ".$cc;

$result=mysql_query($sql);
$arr=array();
while($row=mysql_fetch_assoc($result)){
	$arr[]=$row;
}
mysql_free_result($result);

$jsonA='<script>var s='.json_encode($arr).';console.log(JSON.stringify(s));</script>';
file_put_contents("abc.html", $jsonA);