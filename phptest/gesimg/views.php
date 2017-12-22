<?php 
header('Content-type: image/jpeg'); 

$logo = imagecreateformpng("instagram.png");
$model =imagecreateformejpeg("midoriya.jpg"); 

$logo_large = imagesx($logo);
$logo_hauteur =imagesy($logo);

$model_large = imagesx($model);
$model_hauteur = imagesy($model);

$destination_X =  $model_large - $logo_large ;
$destination_Y = $model_hauteur - $logo_hauteur;

imagecopymerge($model,$logo,$destination_X,$destination_Y,0,0,$logo_large,$logo_hauteur,60);

imagejpeg($model);


?>