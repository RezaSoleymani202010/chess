<?php
$image=imagecreatetruecolor(500,500);
for($i=200;$i>=20;$i-=20){
$color=imagecolorallocate($image,rand(0,255),rand(0,255),rand(0,255));
imagefilledellipse($image,250,250,$i,$i,$color);

}
imagejpeg($image,"imagefilledellipse.jpeg");