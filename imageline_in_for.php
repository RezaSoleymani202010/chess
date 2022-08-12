<?php
$image=imagecreatetruecolor(500,500);
for($i=0;$i<8;$i++){
    $color=imagecolorallocate($image,rand(0,255),rand(0,255),rand(0,255));
    imageline($image,0,$i*10,$i*10,$i*10,$color);
}
imagejpeg($image,"imageline_in_for.jpeg");