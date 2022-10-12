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
        $_SESSION['favColor'] = "Red";
        $_SESSION['favAnimal'] = "Cat"; 
        echo "session variable are set !";
    ?>
</body>
</html>