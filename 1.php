<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no,maximum-scale=1.0">
	<!-- <link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css"> -->
	<style type="text/css">
		#getJsonpByJquery{
			width: 100%;height: 100px;
			background: #ccc;

		}
	</style>
	<title></title>
</head>
<body>
	<div id="getJsonpByJquery"></div>
</body>
</html>
<script type="text/javascript" src='../js/jquery.min.js'></script>
<!-- <script type="text/javascript" src='./js/bootstrap.min.js'></script> -->
<script type="text/javascript">
	// $("#getJsonpByJquery").click(function () {
		$.ajax({
			async:false,
			url : "1.html",
			success : function(result){
				var n=result.match(/<p>(.*)<\/p>/g);
				var p=result.match(/var s =\"(.*)\"/g)[0].substr(8).split(',');
				var tt=[];
				for(var j=0;j<100;j++)tt[j]=j<50?2:j<90?3:4;
				$.ajax({
					type:"POST",
					url:"b1.php",
					data:{"n":n,"p":p,"t":tt},
					success:function(data){
							$("#getJsonpByJquery").html(data.msg);
						
					},
					dataType:"json"
				})

				//console.log(s);

				//__insert("puanduan","name,daan,lx",s);
					 
				  //s+="<p>第"+i+"题"+"</p>"+n[i-1]+"<p>"+p[i-1]+"</p>";
				
				//$('#getJsonpByJquery').html(s);
			}
			});
		
	
		//INSERT INTO `puanduan`(`name`) VALUES ('abc'),('abc'),('abc')
		// })
	</script>
<!-- http://61.142.209.43:800/Allmnks/7/mnks/main.asp?g_no=危险化学品安全作业&mx=加氢工艺作业&uptype=复审&P_Name2=370301&cardno=111111 -->

<!-- select distinct name from xxx  -->