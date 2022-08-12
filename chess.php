  <?php
  $image=imagecreatetruecolor(800,800);

  for($i=0;$i<8;$i++){
      for($j=0;$j<8;$j++){
//  if(($i+$j)%2==0){
    if(($i%2==0)&&($j%2==0)or(($i%2 !=0)&&($j%2 !=0))){
     $color=imagecolorallocate($image,255,255,255);
 }else{
     $color=imagecolorallocate($image,0,0,0);
 }

 $font_color=imagecolorallocate($image,255,0,0);
 imagefilledrectangle($image, $i*100,$j*100,($i+1)*100,($j+1)*100, $color);  
 imagestring($image,5,$i*100,$j*100,"x=$i , y=$j ",$font_color);

  }
 }
