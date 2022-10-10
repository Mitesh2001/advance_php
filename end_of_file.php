<?php
$myFile = fopen("webdictionary.txt", "r") or die("Unble to open file !") ; 

while (!feof($myFile)) {
    echo fgets($myFile);
}

fclose($myFile);
?>