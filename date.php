<?php
date_default_timezone_set("Asia/Calcutta");
$date = mktime(11, 14, 54, 8, 12, 2014);
echo "Today is " . date("Y/m/d h:i:s a" , $date) . "<br>";
echo "Today is " . date("Y.m.d h:i:s a" , $date) . "<br>";
echo "Today is " . date("Y-m-d h:i:s a" , $date) . "<br>";
echo "Today is " . date("l");
echo "<br>----------------------------------------------<br>";
echo "strtotime()<br>";
$date = strtotime("+3 Months");
echo "Created date is " . date("Y-m-d h:i:sa", $date);
echo "<br>----------------------------------------------<br>";
echo $d1=strtotime("July 04");
$d2=ceil(($d1-time())/60/60/24);
echo "<br>There are " . $d2 ." days until 4th of July.";
?>