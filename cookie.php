<?php
    $name = "username";
    $value = "mitesh_ladva";
    setcookie($name,$value,time() + (86400*30),"/");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie Example</title>
</head>
<body>
    <?php
    
        if (count($_COOKIE) > 0 && !isset($_COOKIE[$name])) {
            echo "cookie ".$name." is set ! <br>";
            echo "value is : ".$value;
        } else {
            echo "cookie ".$name." is not set !";
        }
    ?>
</body>
</html>