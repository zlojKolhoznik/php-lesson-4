<?php
$arr1 = [];
$arr2 = [];
$result = [];
echo "<strong>Array 1: </strong>";
for ($i = 0; $i < 10; $i++) {
    $arr1[] = rand(1, 100);
    echo "$arr1[$i] ";
}
echo "<br><br><br><strong>Array 2: </strong>";
for ($i = 0; $i < 10; $i++) {
    $arr2[] = rand(1, 100);
    echo "$arr2[$i] ";
}
for ($i = 0; $i < 10; $i++) {
    if (!in_array($arr1[$i], $arr2) && !in_array($arr1[$i], $result)) {
        $result[] = $arr1[$i];
    }
    if (!in_array($arr2[$i], $arr1) && !in_array($arr2[$i], $result)) {
        $result[] = $arr2[$i];
    }
}
echo "<br><br><br><strong>Result: </strong>";
for ($i = 0; $i < count($result); $i++) {
    echo "$result[$i] ";
}