<?php
header('content-type:image/jpeg');
$font="BRUSHSCI.TTF";
$image=imagecreatefromjpeg("ahmedd.jpg");
$color=imagecolorallocate($image,19,21,22);
$name="ahmedelnmermoo";
imagettftext($image,100,0,720,740,$color,$font,$name);
$name="javascript";
imagettftext($image,100,0,740,1000,$color,$font,$name);
$date="6th may 2020";
imagettftext($image,50,0,1320,1230,$color,"AGENCYR.TTF",$date);
//imagejpeg($image);
$date="khaled";
imagettftext($image,60,0,420,1240,$color,"AGENCYR.TTF",$date);
imagejpeg($image);
imagedestroy($image);
?>