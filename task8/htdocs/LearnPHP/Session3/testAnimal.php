<?php
require 'Animal.php';

$cow = new cow('Loài ăn cỏ','Cỏ');
$lion = new lion('Loài ăn thịt','thịt động vật ăn cỏ');
echo 'Con Bòa' . '<br>';
echo $cow->getFamily() . '<br>';
echo "Thức Ăn: " .$cow->getFood() .'<br>';

echo '<br>';

echo 'Sư Tử' . '<br>';
echo $lion->getFamily() . '<br>';
echo 'Thức Ăn: '. $lion->getFood();

