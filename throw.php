<?php

function devide($divident, $divisor)
{

    if ($divisor == 0) {
        throw new Exception("Division by zero !");
    }

    return $divident / $divisor ;
}

try {
    echo devide(10, 0);
} catch (Exception $e) {
    echo $e->getCode();
    echo $e->getMessage();
    echo $e->getFile();
    echo $e->getLine();
    return;
    echo "Unable to divide.<br>";
} finally {
    echo "Process ended !";
}



