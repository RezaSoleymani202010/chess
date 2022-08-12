<?php
$image=imagecreatetruecolor(500,500);
$color=imagecolorallocate($image,rand(0,255),rand(0,255),rand(0,255));
imagefilledellipse($image,250,250,200,200,$color);
imagejpeg($image,"imagefilledellipse.jpeg");