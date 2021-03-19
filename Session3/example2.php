<?php
$now = strtotime('2021-02-29');
$my_date = strtotime("2021-02-14");
$datediff = $now - $my_date;

$a = floor($datediff / (60 * 60 * 24));
echo "Còn $a ngày nữa đến tết"
?>
