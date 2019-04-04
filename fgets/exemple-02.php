<?php

$file = "image-01.jpg";

$base64 = base64_encode(file_get_contents($file));

$fileinfo = new finfo(FILEINFO_MIME_TYPE);
$mimetype = $fileinfo->file($file);

$b64encode =  "data:". $mimetype . ";base64," . $base64;

?>

<a href="<?=$b64encode?>" target="_blank">Link Para Image</a>