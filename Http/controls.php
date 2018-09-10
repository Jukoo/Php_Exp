<? 
@session_start();
#!/usr/bin/php7.2.5

require "Storage/RequestStorage.php" ; 
require "Middleware/Authentification.php" ; 
require "Middleware/MsgDisplay.php" ; 

/**
 * @class Controls @extends to CrossfailX 
 *----------------------------------------
 * Control all action from the user interface and take decision 
 */ 

class Controls extends CrossfailX{

    const GLOBAL_PATH = "Resources/pages/" ; 

    /**
     * the index Default Page :: all item will be listed there 
     * # list all items present in database
     * @param void 
     * @return void 
     */ 

    public static function MainPage(){
        /**
         * statement 
         */
        include self::GLOBAL_PATH."/home.php" ;  
    }

    /**
     * Register new user in Storage 
     * @param void 
     * @return void 
     */ 
    
    public static function AuthRegister() {

        
        if(isset($_POST)  && !empty($_POST)) {

            @define("POS_EMAIL_INPUTFIELD",1); 
            @define("POS_PSWD_INPUTFIELD" ,2); 
            $MAIL["email::Addr"] = []; 
            $PASS["pass::hash"]  = [];
            #$PSD["UNIQ:x:PSD"]   = [];   
            $Error_trigger = []; 
            forEach($_POST as $indexk => $val) {
            
                 parent::sp_char($val) ; 
                 @array_push($MAIL["email::Addr"],  $indexk  == "e-mail" ? SecureAuth::Check_mail_address($val) : null);
                 @array_push($PASS["pass::hash"] ,$indexk == "pswd"? SecureAuth::Encrypted_pass($val) : null);
                 #@array_push($PSD["UNIQ:x:PSD"] , $indexk == "psdname" ?parent::sp_char($val) : null ) ;   
                if ( $val == null ){
                    
                  $Error_trigger["empty_field"] = "Ooops you did some mistake in the formular please check  ";   
                }   
            }
           # var_dump($_POST["psdname"]) ; 
             if (RequestStorage::isAlready_registred(parent::sp_char($_POST["psdname"]))){
               $Error_trigger["deja_vu"] = "this pseudo is already token please choose another one ";
            }
             
            if (empty($Error_trigger)) {
                RequestStorage::User_Register(
                    parent::sp_char($_POST["psdname"]),
                    $MAIL["email::Addr"][POS_EMAIL_INPUTFIELD] , 
                    $PASS["pass::hash"][POS_PSWD_INPUTFIELD], 
                    parent::sp_char($_POST["address"]) , 
                    parent::sp_char($_POST["city"]) 
                ) ; 
                MsgDisplay::info_statement(" well done " , "success") ; 
                
                $_SESSION["login"] = SecureAuth::warranty_session_access(20);
                 
                @header("Location:index.php?p=".$_SESSION["login"]) ; 

            }else {
                
                forEach ($Error_trigger as $mistake => $content) {
            
                    MsgDisplay::info_statement($content , "error") ; 
                }
            }
           
       }
        
        include self::GLOBAL_PATH."/register.php"; 
    }

    public static function logIn (){
    
        
    
    } 
}