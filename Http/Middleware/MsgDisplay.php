<? 
/**
 * @class MsgDisplay 
 *  display type message  error or success 
 */ 

class  MsgDisplay {

    const COLOR_ERROR   = "red darken-4" ; 
    const COLOR_SUCCESS = "teal  darken-2 " ; 

    /**
     * display warning  header message 
     * @param string $msg $colorType 
     * @return string 
     */ 
    private static function mistakeDisplayTemplate  ($msg , $colorType) {


        return   "<div class = 'card panel  $colorType '  >
                     <small >"
                    .$msg  
                    ."</small> 
                </div>" ; 
    }

    /**
     * display success  header message 
     * @param string $msg $colorType 
     * @return string 
     */ 
    private static function successDisplayTemplate ($msg , $colorType) {
    
        return    "<div class = 'card panel $colorType '>
                     <small >"
                    .$msg
                    ."</small> 
                </div>" ; 

    }

    /**
     * display message Template  
     * @param string $msg_to_display , $type
     * @return string 
     */

    public static function info_statement ($msg_to_display  , $type  ) {

        $allowed_type = ["success" , "error"]  ; 

        if(@in_array($type  , $allowed_type)) {
        
            echo $type == $allowed_type[0]? 
                self::successDisplayTemplate($msg_to_display ,self::COLOR_SUCCESS) :
                self::mistakeDisplayTemplate($msg_to_display ,self::COLOR_ERROR) ;  
        }

    }  

}
