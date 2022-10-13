<?php

$ageObj = '{
  "name1": 35,
  "name2": 28,
  "name3": 31
}';

$ages = json_decode($ageObj);

foreach ($ages as $key => $age) {
    echo $key." => ".$age."<br>";
}