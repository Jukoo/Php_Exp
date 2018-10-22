<? 
require_once  "Authentification.php" ; 

/**
 * WARNING !! this class it's just a test to allow backoffice quickly 
 * without using .htaccess or data Storage 
 * @security { xtra low }
 * @class Backlog
 * the registration of the Admin control 
 * @depercation : it 'll be removed on production 
 */

class Backlog extends SecureAuth {  

    const DEFAULT_LOG_AD  = [
         "junky@firehole.srv" , 
         "abracadabra" 
    ] ; 

    /**
     * Default  admin user 
     * @param string $email_admin  
     * @return boolean 
     */   
    public static function adminAme (string $mail_admin) {

        if ($mail_admin) {
            $mai_admin  = parent::Check_mail_address($mail_admin) ; 

            return @in_array($mail_admin , self::DEFAULT_LOG_AD) ;
            
        }
    }

    /**
     * Default admin pass word   [ not  secured ]
     * @param string $magicPass 
     * @return boolean
     */  
    public static function AdminPass (string $magicPass) {
        if($magicPass) {
            $magicPass = @htmlspecialchars($magicPass) ; 
            return @in_array($magicPass , self::DEFAULT_LOG_AD) ; 
        }
    
    }
    
} 
