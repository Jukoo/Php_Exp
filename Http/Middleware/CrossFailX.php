<?
/**
 * @class CrossfailX 
 * -----------------
 * sercure  all input from the user
 * Prevent Sql injection 
 * or crsf faille  
 */ 

class CrossfailX {

    /**
     * deny Crosfailscripting 
     * @param string $input 
     * @return string 
     */ 
        
    protected static function sp_char($input){

        return @htmlspecialchars($input);
        
    }
    
    protected static function deny_slashes () {}
    

}
