<!DOCTYPE html>
<html>
<body>

<?php
$int = 122;

$min = 1;
$max = 200;

if (filter_var($int,FILTER_VALIDATE_INT,["options" => ["min_range" => $min , "max_range" => $max]]) === false) {
    echo("Variable value is not within the legal range");
} else {
  echo("Variable value is within the legal range");
}

?>

</body>
</html>