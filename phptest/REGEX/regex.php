<?php 
echo nl2br(preg_match('#Guittar#i',"j'aime jouer de la guittar")? "vrai ":"faux");

echo preg_match("#^bonjou|roi$#", "bonjour mon petit roi")? "vrai ":"faux ";

echo preg_match("#Gr[aoi]s$#i","la nuit tous les chats sont gris")? "vrai ": "faux ";
 
//TODO REGEX ON PROCESss... 
if (isset($_POST['number'] , $_POST["email"]) && !empty($_POST['number'])&&!empty($_POST['email'])){
 $verify_num =htmlspecialchars($_POST['number']);
 $verify_email =htmlspecialchars($_POST['email']);  
 
 echo preg_match("#^0[1-68]([-. ]?\d{2}){4}$#",$verify_num)? "c'est bon".$verify_num : "non valide"; 

 echo preg_match("#^\w+@\w+\.\w{2,}$#" ,$verify_email)? "email valide" : "wrong ! ";

}else{
    echo "please write something ";
}
?> 
<form action="" method="Post"> 
<label for="num">TEl : </label>
    <input type="text" name ="number" id ="num"> <br> <br>
<label for="mail">E-mail </label>
    <input type="text" name ="email" id ="mail"> <br> <br>
    <input type="submit" value="Analyser">
</form>
