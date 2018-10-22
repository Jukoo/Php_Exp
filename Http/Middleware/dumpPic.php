<?
/**
 * @class dumpPict 
 * save allowed picture in temporary file 
 */ 

class dumpPic {

    const OK_CODE  = 0 ; 
    const ERR_CODE = 1 ;  
    const LIMITE_SIZE = 2000000 ; 
    const PATH_PIC ="../../public/img" ; 

    const ALLOWED_EXT = [
        "jpeg " , 
        "png"   , 
        "gif"   , 
        "jpg" 
    ] ; 

    private static $file_name ; 

    private static function forcedTypeStr() {
    
        if (!@is_string($file_name)) {
            
        trigger_error("An  error  was Occured in the file" , E_USER_WARNING) ;             
        die() ; 
        } else return $file_name ; 
    }

    /**
     *
     */ 

    private static function initFile_name ($name) {
    
        if (@is_null(self::$file_name)) {

            self::$file_name = $name ; 
        }

       return self::$file_name ;  
    }

    /**
     *
     */  
    private static function file_state (string $name) {

        $Fname = $_FILES[$name] ; 
        if ( $Fname["error"]  == self::OK_CODE)  {
            
            self::initFile_name($Fname) ; 
        }
        else return self::ERR_CODE ; 
    
    } 

    /**
     * check the size og the picture is correct 
     * @param void 
     * @return void
     */
   private static function file_size () {
       return (forcedTypeStr()["size"] <= self::LIMITE_SIZE) ?
           true
           :
           false ; 

   } 


    private static function getExtention ()  {

        $fetch_extension = @pathinfo(self::$file_name["name"]) ; 
        $extention = $fetch_extension["extension"] ; 
        return $extention ; 
         
    } 

    private static function isAllowedFormat(){
        if(@in_array(self::getExtention(self::$file_name) , self::ALLOWED_EXT)){
            return  true ; 
        }else return false ; 
    }

    private static function moveFile2Src() {

        if(isAllowedFormat()) {
            
            $tmporary_name = $file_name["tmp_name"] ; 
            $define_base_name = @basename($file_name["name"]) ;
             
            @move_uploded_file($tmporary_name ,"self::PATH_PIC/$define_base_name") ; 
        }
    }

    public static  function fileOpreation ($file) {

        self::initFile_name(self::file_state($file)) ; 
        if (self::file_size() && self::getExtention()) {
            self::isAllowedFormat() ??self::moveFile2Src();
        }else trigger_error("Something wrong happend" , E_USER_WARNING) ; 
    }
}
