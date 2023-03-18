<?php
$arr = [];
echo "Original array: ";
for ($i = 0; $i < 10; $i++) {
    $arr[] = rand(0, 100);
    echo "$arr[$i]; ";
}
for ($i = 0; $i < 5; $i++) {
    $temp = $arr[$i];
    $arr[$i] = $arr[9 - $i];
    $arr[9 - $i] = $temp;
}
echo "<br>Reversed array: ";
foreach ($arr as $num) {
    echo "$num; ";
}
