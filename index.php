<?php

require_once("ImgTuner.php");

$tuner = new ImgTuner();

try {
    $tuner->open("resources/images/friends.jpg");

} catch (Exception $exception) {
    print_r($exception);
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Image Tuner</title>
</head>
<body>

<h1>Image Tuner</h1>


<?php
$tuner->open("resources/images/friends.jpg");
$tuner->save("build/original.jpg");
?>
<h6>Original</h6>
<image src="build/original.jpg"/>

<?php
$tuner->open("resources/images/friends.jpg");
$tuner->rotate(45);
$tuner->save("build/rotate.jpg");
?>
<h6>Rotate 45</h6>
<image src="build/rotate.jpg"/>


<?php
$tuner->open("resources/images/friends.jpg");
$tuner->resize(150, 250);
$tuner->save("build/resize.jpg");
?>
<h6>Resize l=15, b=25</h6>
<image src="build/resize.jpg"/>


<?php
$tuner->open("resources/images/friends.jpg");
$tuner->negative();
$tuner->save("build/negative.jpg");
?>
<h6>Negative</h6>
<image src="build/negative.jpg"/>


</body>
</html>