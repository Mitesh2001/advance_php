<?php
$myFile = fopen("webdictionary.txt", "r") or die("Unble to open file !") ; 
echo fgets($myFile);
fclose($myFile);
?>