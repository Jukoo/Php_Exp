<?php 
header('Content-type: image/png');  
// imagecreate(image vide) -- //imagecreateformjpeg(image jpeg)

$image = imagecreate(350,350);

// les couleurs 
$orange = imagecolorallocate($image, 255, 128, 0);
$bleu = imagecolorallocate($image, 0, 0, 255);
$bleuclair = imagecolorallocate($image, 156, 227, 254);
$noir = imagecolorallocate($image, 0, 0, 0);
$blanc = imagecolorallocate($image, 255, 255, 255);

/*
*imagestring(l'image,taille de police,positionX,positionY,text a ecrie, la couleur)
*/
imagestring($image,5,130,150,"Jet set Run ",$blanc);

//ImageSetPixel ($image, $x, $y, $couleur);
imagesetpixel($image,130,150,$noir);

//ImageLine ($image, $x1, $y1, $x2, $y2, $couleur);
imageline($image,100,100,150,150,$bleuclair);

//ImageEllipse ($image, $x, $y, $largeur, $hauteur, $couleur);
imageellipse($image,225,225,300,250,$noir);

//ImageRectangle ($image, $x1, $y1, $x2, $y2, $couleur);
imagerectangle($image,100,100,156,120,$bleu);

//ImagePolygon ($image, $array_points, $nombre_de_points, $couleur);
$array_points = array(10,25,48,67,79,78);
imagepolygon($image,$array_points,3,$noir);

// la transparence 
//imagecolortransparent($image,$orange);

// afichage de l'image
imagepng($image);

?>