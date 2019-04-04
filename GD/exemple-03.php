<?php

$image = imagecreatefromjpeg("certificado.jpg");

$titleColor = imagecolorallocate($image, 0, 0, 0);
$gray = imagecolorallocate($image, 100, 100, 100);

imagettftext(
    $image, 32, 0, 320, 150, $titleColor,
    "fonts".DIRECTORY_SEPARATOR."Bevan".DIRECTORY_SEPARATOR."Bevan-Regular.ttf",
    "CERTIFICADO");
imagettftext(
    $image, 32, 0, 440, 350, $titleColor,
    "fonts".DIRECTORY_SEPARATOR."Playball".DIRECTORY_SEPARATOR."Playball-Regular.ttf",
    "Leonardo Abreu"
);
imagestring($image, 3, 440, 370, utf8_decode("Concluido em: ").date("d/m/Y"), $titleColor);

header("Content-type: image/jpeg");

imagejpeg($image);
imagedestroy($image);


?>