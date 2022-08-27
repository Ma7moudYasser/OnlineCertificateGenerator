<?php
if(isset($_POST['add'])){
    $im=imagecreatefrompng('cer.png');
    $font=realpath('Roboto-BoldItalic.ttf');
    $color=imagecolorallocate($im, 51,51,102);
    imagettftext($im, 45, 0, 780,700, $color, $font, $_POST['name']);
    imagettftext($im, 20, 0, 900,1390, $color, $font, $_POST['numb']);
    imagepng($im,"students/".$_POST['name'].".png");
    imagedestroy($im);
}

echo'<center> <h1> Successfully Added Certificate</h1></center>'

?>