<html>
<body>
    <link rel="stylesheet" href="style.css">
    <div class="mir">
        Погода в городах Украины:<br><br>
        <img src="г.Киев.png">
        <img src="г.Харьков.png"><br><br>
        <img src="г.Донецк.png">
        <img src="г.Днепропетровск.png"><br><br>
        Погода в мире:<br><br>
        <img src="г.Москва.png">
        <img src="г.Тампере.png"><br><br>
        <img src="г.Лондон.png">
        <img src="г.Барселона.png"><br><br>
    </div>
</body> 
<?php
$text = array('г.Киев','г.Харьков','г.Донецк','г.Днепропетровск','г.Москва','г.Тампере','г.Лондон','г.Барселона');
for($i = 0 ; $i < 8; $i++)
{
    $x_c = rand(60,150);
    $y_c = rand(60,150);
    $im = imagecreatetruecolor(500, 200);
    imageantialias($im, true);
    $black = imagecolorallocate($im, 0x00, 0x00, 0x00);
    $blue = imagecolorallocate($im, 0x00, 0xFF, 0x00);
    $red =  imagecolorallocate($im, 255, 0, 0);
    $yellow = imagecolorallocate($im, 255, 210, 0);
    imagefilledrectangle($im, 0, 0, 499, 199, $black);
    $font = __DIR__.'./ct.ttf';
    imagettftext($im,15,0,10,198,$blue,$font,$text[$i]);
    imagettftext($im,15,0,360,198,$blue,$font,"05.05.2022");
    $moon = imagecreatefrompng('moon_sm.png');
    $left = imagecreatefrompng('1.png');
    $middle = imagecreatefrompng('2.png');
    $ride = imagecreatefrompng('3.png');
    $sun = imagecreatefrompng('sun_sm.png'); 
    imagecopy($im,$ride,350,0,0,0,210,150);
    imagecopy($im,$left,50,0,0,0,210,150);
    imagecopy($im,$middle,150,0,0,0,200,150);
    imagecopy($im,$moon,25,0,0,0,64,64);
    imagecopy($im,$moon,425,0,0,0,64,64);
    imagecopy($im,$sun,210,0,0,0,64,64);
    imageline($im,1,150,498,150,$blue);
    imageline($im,1,150,1,1,$blue);
    imageline($im,1,$y_c,60,$x_c,$red);
    $y_c = rand(60,150);
    imageline($im,60,$x_c,120,$y_c,$red);
    $x_c = rand(60,150);
    imageline($im,120,$y_c,180,$x_c,$red);
    $y_c = rand(60,150);
    imageline($im,180,$x_c,240,$y_c,$red);
    $x_c = rand(60,150);
    imageline($im,240,$y_c,300,$x_c,$red);
    $y_c = rand(60,150);
    imageline($im,300,$x_c,360,$y_c,$red);
    $x_c = rand(60,150);
    imageline($im,360,$y_c,420,$x_c,$red);
    $x = 1;
    $y = 143;
    $temp = 0;
    $time = 0;
    for($j = 0;$j<9;$j++)
    {
        imagettftext($im,10,0,$x,170,$blue,$font,$time);
        imagettftext($im,10,0,2,$y,$blue,$font,$temp);
        $x +=60;
        $time +=3;
        $temp +=5;
        $y -=30;
    }
    imagepng($im,__DIR__."/$text[$i].png");
    imagedestroy($im);
}
?>  

