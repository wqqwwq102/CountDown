<?php
namespace Home\Controller;
use Think\Controller;
		class TimeController extends Controller{
			public function time(){
				date_default_timezone_set("Asia/Hong_Kong");
		        $time1 = time();
		        $time2 = strtotime(date("Y-m-d"))+(17*3600+1800);
		        $temp = $time2 - $time1;
		        echo $temp;
			}
		}
?>