<?php
$image=imagecreatetruecolor(500,500);
$color=imagecolorallocate($image,255,100,50);
imagefilledrectangle($image,0,0,250,250,$color);
imagejpeg($image,"imagefilledrectangle.jpeg");