<?
@session_start() ; 
#include_once  "Http/kernel.php" ; 
require "Http/controls.php" ; 

@ob_start() ; 

if (empty($_GET) or  ! isset($_GET)){

    $title="Main Home" ; 
    Controls::MainPage() ; 

}elseif(isset($_GET["OAuth"])) {
    $title ="AuthRegister" ; 
    Controls::AuthRegister(); 
    
}elseif (isset($_GET["p"]) && $_GET["p"] == $_SESSION["login"]){

    Controls::AuthRegister(); 

}

$Contents = @ob_get_clean() ; 


require "Resources/pages/Layout/Default.php" ; 
