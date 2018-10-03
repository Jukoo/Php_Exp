<? 
require_once  "Storage/RequestStorage.php" ; 

/**
 * @class PanelManager 
 * manage the content on backoffice 
 */ 

class PanelManager {

    const TEMPLATE_SRC  = "Resources/pages/Backoffice.php"  ; 

    /**
     * the Panel initializer for Administrating 
     * @param void 
     * @return General Template 
     *
     */ 

     public static  function initializePannel () {
        
         return include self::TEMPLATE_SRC ; ; 
     } 

    /**
     *
     *
     */ 
    public static function itemInsertion () {
     
        
     }
   
    /**
     *
     */
    public static function Update () {
    
             
    
    } 

    /**
     *
     */
    public static function Deletation () {
    
    
    }

    /**
     *
     */
    public static function getSingle() {
    
        
    }
}


