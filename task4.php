<?php
function insertionSort2dArray($arr, $size1, $size2) {
    $tempArr = [];
    for ($i = 0; $i < $size1; $i++) {
        for ($j = 0; $j < $size2; $j++) {
            $tempArr[] = $arr[$i][$j];
        }
    }
    for ($i = 0; $i < count($tempArr); $i++) {
        $t = $tempArr[$i];
        $j = $i - 1;
        while ($j >= 0 && $tempArr[$j] > $t) {
            $tempArr[$j + 1] = $tempArr[$j];
            $j--;
        }
        $tempArr[$j + 1] = $t;
    }
    $result = [];
    for ($i = 0; $i < $size1; $i++) {
        $result[] = [];
        for ($j = 0; $j < $size2; $j++) {
            $result[$i][] = $tempArr[$i * $size1 + $j];
        }
    }
    return $result;
}

$arr = [];
echo "<strong>Original array:</strong><br>";
for ($i = 0; $i < 5; $i++) {
    $arr[] = [];
    for ($j = 0; $j < 5; $j++) {
        $arr[$i][] = rand(10, 100);
        echo $arr[$i][$j]." ";
    }
    echo "<br>";
}
$arr = insertionSort2dArray($arr, 5, 5);
echo "<br><br><br><strong>Sorted array:</strong><br>";
for ($i = 0; $i < 5; $i++) {
    $arr[] = [];
    for ($j = 0; $j < 5; $j++) {
        $arr[$i][] = rand(1, 100);
        echo $arr[$i][$j]." ";
    }
    echo "<br>";
}