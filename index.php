<?
@session_start() ;  
require "Http/controls.php" ; 
require "Http/PanelManager.php" ; 

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
}elseif (isset($_GET["USID"])  && !empty($_GET["USID"])){

    $title="SamaZon Inc" ; 
    Controls::certified_usr() ; 
}elseif (isset($_GET["DisOAuth"])) {
    $tile = "disconnecting ... " ; 
    Controls::Disconnect_user() ; 

}elseif(isset($_GET["b4ck0ff1C3"]) && !empty($_GET["b4ck0ff1C3"])) { 

    $title = "b4ck0ff1C3" ; 
    PanelManager::initializePannel() ; 

}elseif (isset($_GET["CGU"])) { 

    include "Resources/pages/CGU.php" ; 

}else{
    @header($_SERVER["SERVER_PROTOCOL"] ."404 NOT FOUND") ; 
     
}
$Contents = @ob_get_clean() ; 


require "Resources/pages/Layout/Default.php" ; 

