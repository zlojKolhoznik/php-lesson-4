<?php
function findIndexOf($arr, $num) {
    for ($i = 0; $i < count($arr); $i++) {
        if ($arr[$i] === $num) {
            return $i;
        }
    }
    return -1;
}
$arr = [];
$num1 = 45;
$num2 = 1;
echo "Array: ";
for ($i = 0; $i < 10; $i++) {
    $arr[] = rand(0, 100);
    echo "$arr[$i]; ";
}
echo "<br>";
$index1 = findIndexOf($arr, $num1);
$index2 = findIndexOf($arr, $num2);
if ($index1 !== -1) {
    echo "Index of $num1: $index1";
} else {
    echo "No result for $num1";
}
echo "<br>";
if ($index2 !== -1) {
    echo "Index of $num2: $index2";
} else {
    echo "No result for $num2";
}