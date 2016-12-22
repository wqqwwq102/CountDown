<!--<?php
	//echo "welcome!!!!"
	//phpinfo();
	/*$con = mysql_connect('localhost','mac','5942');
	if(!$con){
		die('Could not connect: '.mysql_error());
	}else{
		echo "OK! <br />";
	}
	mysql_query("set names 'utf8'");
	mysql_select_db("test", $con);

	$result = mysql_query("SELECT * FROM mac_user");

	while($row = mysql_fetch_array($result))
  	{
  		echo $row['name'] . " " . "<img src='".$row['img']."' />";
  		echo "<br />";
  	}

	mysql_close();*/
	/*date_default_timezone_set("Asia/Hong_Kong");
	$time = time();
	$time1 = strtotime(date("Y-m-d"))+(17*3600+1800);
	$temp = $time1 - $time;*/
?>-->
<!DOCTYPE html>
<html>
<head>
	<title>倒计时</title>
<script type="text/javascript">
var runtimes = 0;        
function GetRTime(){        
var nMS = {$temp}-runtimes;        
var nH=Math.floor(nMS/(60*60));        
var nM=Math.floor(nMS/60) % 60;        
var nS=Math.floor(nMS) % 60;        
document.getElementById("RemainH").innerHTML=nH;
document.getElementById("RemainM").innerHTML=nM;        
document.getElementById("RemainS").innerHTML=nS;        
if(nMS == 5*60)        
{        
  alert("还有最后五分钟！");  
  window.location.reload();       
}
runtimes++;        
setTimeout("GetRTime()",1000);      
}        
window.onload=GetRTime; 
</script>
</head>
<body>
<div class="td">
<center>
<font size = 24px>距离下班还有</font>
<font size = 50px  color = "red">
<center><h1><br/><strong id="RemainH">XX</strong>:<strong id="RemainM">XX</strong>:<strong id="RemainS">XX</strong></h1>   </center> 
</font>
</center>
</div>
</body>
</html>