<?php
    $Month = 84600 + time();
    setcookie('Name','Jerry', $Month);
    echo "The cookie has been set.";
    ?>
