<?php
    $fuel = 100;
    echo $fuel <= 1 ? "Fill tank now" : "There's enough fuel";
    echo "<br>";
    $enough = 0;
    $enough = $fuel <= 1 ? FALSE : TRUE;
    echo $fuel ."<br>";
    echo $enough ? "ok " : "Not ok";
    ?>
