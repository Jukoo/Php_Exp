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
    
}elseif (isset($_GET["log"])  ||  !empty($_GET["SID_token"])){
    $title = "log in " ; 
    Controls::logIn() ; 

}else{
    @header($_SERVER["SERVER_PROTOCOL"] ."404 NOT FOUND") ; 
     
}
$Contents = @ob_get_clean() ; 


require "Resources/pages/Layout/Default.php" ; 

