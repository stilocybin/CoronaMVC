<?php

// var_dump($_REQUEST);
$x = $_GET['x'];
$y = $_GET['y'];


$image = imagecreatetruecolor(400, 300);

// Allocate a color for the polygon
$col_poly = imagecolorallocate($image, 255, 255, 255);


imagepolygon($image, array(

        50, 110,
        60, 120,
        70, 130,
        80, 140,
        150, 210,
        160, 220,
        170, 230,
        180, 240,
        $x, $y
        ),9
    ,
    $col_poly);



// Output the picture to the browser
header('Content-type: image/png');

imagepng($image);
imagedestroy($image);