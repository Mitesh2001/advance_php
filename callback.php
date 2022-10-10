<?php

function myCallback($string)
{
    return strlen($string);
}

$strings = ["apple", "orange", "banana", "coconut"];

$lengths = array_map("myCallback",$strings);

print_r($lengths);


echo "<br>-----------------------------------------------<br><br>";

function exclaim($string)
{
    return $string." !";
}

function ask($string)
{
    return $string." ?";
}

function printFormatted($string, $callBack)
{
    echo $callBack($string);
}

printFormatted("Hello world", "exclaim");
echo "<br>";
printFormatted("Hello world", "ask");