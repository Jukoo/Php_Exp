<? 
require_once  "Storage/RequestStorage.php" ; 
require "Middleware/dumpPic.php" ; 
/**
 * @class PanelManager 
 * the controller of Admin manager  [ content on backoffice ]
 */ 

class PanelManager {

    const TEMPLATE_SRC  = "Resources/pages/Manager/"  ; 

    /**
     * the Panel initializer for Administrating 
     * @param void 
     * @return General Template 
     *
     */ 


    #pour chaque url specifier le controler requis
    #index.php?backoffice=typeOperation
    /**
     *
     *
     */ 
    public static function itemInsertion () {
     
        include self::TEMPLATE_SRC."Input.php" ; 

     }
    /**
     *
     */
    public static function Up2date () {
    
             
    include self::TEMPLATE_SRC."uptodate.php" ;  
    } 

    /**
     *
     */
    public static function Deletation () {
    
    include self::TEMPLATE_SRC."throwOut.php" ; 
    }

    /**
     *
     */
    public static function getSingle() {
    
        
    }
}


