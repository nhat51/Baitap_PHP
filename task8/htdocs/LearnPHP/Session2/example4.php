<?php
    $money = $_GET['money'];
    $balance = 0;
    $saving = 0;

    if($balance < 100){
        $money = 1000;
        $balance += $money;
    }
    elseif ($balance > 200){
        $saving += 100;
        $balance -= 100;
    }
    else{
        $saving += 50;
        $balance -= 50;
    }
    echo "Money = $money <br>";
    echo "Balance = $balance <br>";
    ?>
