<style>
    .banner {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-align: center;
    }
    .banner img {
        width: 500px;
        max-height: 800px;
    }
</style>
<div class="banner">
<?php
$banners = [];
for ($i = 1; $i <= 5; $i++) {
    $banners["Banner $i"] = "img/banner$i.jpg";
}
$index = rand(1, count($banners));
echo "<img alt='Banner $index' src='".$banners["Banner $index"]."'/>";
echo "<p>Banner $index</p>";
?>
</div>
