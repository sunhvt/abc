<?php
include_once "../include/function.inc.php";
header("Content-Type:text/html;charset=utf-8");
__conn('localhost','root','root','anqauan');
$cc="xxx";
$sql="select id,name from ".$cc;

$result=mysql_query($sql);
$arr=array();
while($row=mysql_fetch_assoc($result)){
	$arr[]=$row;
}
mysql_free_result($result);
$count=count($arr);
for($i=1;$i<=$count-1;$i+=100){
	for($j=$i+100;$j<=$count;$j+=100){
		if($arr[$i]['name']==$arr[$j]['name']){
			if($arr[$i+1]['name']==$arr[$j+1]['name']&&$arr[$i+2]['name']==$arr[$j+2]['name']&&$arr[$i+3]['name']==$arr[$j+3]['name']&&$arr[$i+4]['name']==$arr[$j+4]['name']){
			echo $i.'-'.$j.':'.$arr[$i]['name'].'<br/>';
		 }
		}
	}
}
echo "end";

