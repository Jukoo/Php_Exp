<? 
#!/usr/bin/php7.2

require "CrossFailX.php" ; 

/**
 * @class SecureAuth 
 * ---------
 *  secure authentification 
 *  Allow access and allow  random token to each user connected 
 *   
 */ 

class SecureAuth  extends CrossFailX {

    const KeyGen = "qjvxzvxzhkjaCZClh_xzAHKJAHDSAHD1?321443241230dasdadqw1" ; 
    const COST   = 80 ; 
    const DEFAULT_SIZE = 40 ; 

    /**
     * Generate a random key string after register user 
     * each ll be deferent on new  session 
     * @param integer  $size 
     * @return string
     */
    private  static function warranty_session_access (int $size = null) {
    
        return  (! @is_null($size))? @substr(@str_shuffle(@str_repeat(self::KeyGen, $size)), 0 , $size): @substr(@str_shuffle(@str_repeat(self::KeyGen, self::COST)), 0 , self::DEFAULT_SIZE) ;  

     }
    /**
     * hash the password  :: the keys Salt will be autogenerate by the hash 
     * @param string $password 
     * @return  hash
     */ 
    public static function Encrypted_pass(string $password){
        
            return password_hash(parent::sp_char($password), PASSWORD_BCRYPT) ; 
    } 
    
     /**
     * Check the mail address in good format 
     * @param string $e_mail 
     * @return string 
     */ 


    public static function Check_mail_address (string $e_mail) {
    
        if ($e_mail) {
        
            return filter_var(parent::sp_char($e_mail) , FILTER_VALIDATE_EMAIL) ? parent::sp_char($e_mail) : " " ; 
        }
    }
    
    /**
     * matching  the password in login param 
     * @param string $form_pswd , string $hashed_pswd 
     * @return boolean 
     */ 

    public static function Pswd_match($pswd , $hashed_pswd ) {
    
        $is_matching= false  ; 
        
        if (password_verify($pswd , $hashed_pswd)) {
        
             return !$is_matching ; 
        } 
    }
    
    /**
     * give a random  character  as value  for Session 
     * @param int $size
     * @return string 
     */ 
    public static function USID (int $size) {
        
        return self::warranty_session_access($size) ; 
    }

}
