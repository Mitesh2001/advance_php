<?php
$myFile = fopen("webdictionary.txt", "r") or die("Unble to open file !") ; 

while (!feof($myFile)) {
    echo fgetc($myFile);
}

fclose($myFile);
?>