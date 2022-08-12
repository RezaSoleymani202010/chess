<?php
$image=imagecreatetruecolor(500,500);
$color=imagecolorallocate($image,100,100,100);
imageline($image,0,0,250,250,$color);
imagepng($image,"imageline.png");