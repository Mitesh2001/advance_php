<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session Example</title>
</head>
<body>
    <?php
        // print_r($_SESSION);
        echo "Favorite animal is ".$_SESSION['favAnimal'].".<br>";
        echo "Favorite color is ".$_SESSION['favColor'].".";
    ?>
</body>
</html>