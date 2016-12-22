var runtimes = 0;  
var temp;
xmlhttp=new XMLHttpRequest();
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    temp=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","/index.php?c=Time&a=time",false);
xmlhttp.send();
function GetRTime(){        
var nMS = temp-runtimes;    
var nH=Math.floor(nMS/(60*60));        
var nM=Math.floor(nMS/60) % 60;        
var nS=Math.floor(nMS) % 60;        
document.getElementById("RemainH").innerHTML=nH;
document.getElementById("RemainM").innerHTML=(nM<10?("0"+nM):nM);        
document.getElementById("RemainS").innerHTML=(nS<10?("0"+nS):nS);        
if(nMS == 5*60)        
{        
  alert("还有最后五分钟！");  
  window.location.reload();       
}
runtimes++;        
setTimeout("GetRTime()",1000);      
}        
window.onload=GetRTime; 