<?php
$chess=imagecreatefromjpeg("Mychess.jpeg");
$whaite_king=imagecreatefromjpeg("mohre/whiteking.jpeg");
$white_queen=imagecreatefromjpeg("mohre/white_queen.jpeg");
$white_rokh=imagecreatefromjpeg("mohre/whiterokh.jpeg");
$white_fill=imagecreatefromjpeg("mohre/whitefill.jpeg");
$white_asb=imagecreatefromjpeg("mohre/whiteasb.jpeg");
$white_sarbaz=imagecreatefromjpeg("mohre/whitesarbaz.jpeg");
$black_sarbaz=imagecreatefromjpeg("mohre/blacksarbaz.jpeg");
$black_king=imagecreatefromjpeg("mohre/blackking.jpeg");
$black_queen=imagecreatefromjpeg("mohre/blackqueen.jpeg");
$black_rokh=imagecreatefromjpeg("mohre/blackrokh.jpeg");
$black_asb=imagecreatefromjpeg("mohre/blackasb.jpeg");
$black_fill=imagecreatefromjpeg("mohre/blackfill.jpeg");
//$whaite_king=imagecrop($whaite_king,['x'=>0,'y'=>0,'width'=>100,'height'=>100]);
//$white_queen=imagecrop($white_queen,['x'=>0,'y'=>0,'width'=>100,'height'=>100]);
//$white_rokh=imagecrop($white_rokh,['x'=>0,'y'=>0,'width'=>100,'height'=>100]);
imagecopymerge($chess,$black_rokh,0,0,0,0, 100,100,100);
imagecopymerge($chess,$black_rokh,700,0,0,0, 100,100,100);
imagecopymerge($chess,$white_rokh,0,700,0,0, 100,100,100);
imagecopymerge($chess,$white_rokh,700,700,0,0,100,100,100);
imagecopymerge($chess,$white_queen,300,700,0,0,100,100,100);
imagecopymerge($chess,$black_queen,300,0,0,0,100,100,100);
imagecopymerge($chess,$whaite_king,400,700,0,0,100,100,100);
imagecopymerge($chess,$black_king,400,0,0,0,100,100,100);
imagecopymerge($chess,$white_fill,200,700,0,0,100,100,100);
imagecopymerge($chess,$white_fill,500,700,0,0,100,100,100);
imagecopymerge($chess,$black_fill,200,0,0,0,100,100,100);
imagecopymerge($chess,$black_fill,500,0,0,0,100,100,100);
imagecopymerge($chess,$white_asb,100,700,0,0,100,100,100);
imagecopymerge($chess,$white_asb,600,700,0,0,100,100,100);
imagecopymerge($chess,$black_asb,100,0,0,0,100,100,100);
imagecopymerge($chess,$black_asb,600,0,0,0,100,100,100);

for ($i=0;$i<8;$i++) {
    imagecopymerge($chess, $white_sarbaz, $i*100, 600, 0, 0, 100, 100, 100);
    imagecopymergegray($chess, $black_sarbaz, $i*100, 100, 0, 0, 100, 100, 100);
}
imagejpeg($chess,"result3.jpeg");
