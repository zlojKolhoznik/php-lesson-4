<style>
    div {
        position: absolute;
        width: 20px;
        height: 20px;
    }
</style>
<?php
$cords = [
    ["x" => 40, "y" => 250],
    ["x" => 150, "y" => 50],
    ["x" => 40, "y" => 20],
    ["x" => 530, "y" => 250],
    ["x" => 250, "y" => 180],
    ["x" => 240, "y" => 80],
    ["x" => 90, "y" => 90],
    ["x" => 550, "y" => 350],
    ["x" => 440, "y" => 450],
    ["x" => 400, "y" => 250],
];
$colors = ["red", "green", "blue", "yellow", "magenta", "cyan", "maroon", "azure", "navy", "olive", "purple", "teal", "silver", "gray", "coral"];
foreach ($cords as $cord) {
    $color = $colors[rand(0, count($colors) - 1)];
    $x = $cord["x"];
    $y = $cord["y"];
    echo "<div style='left: $x; top: $y; background-color: $color'></div>";
}