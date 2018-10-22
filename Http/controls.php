<? 
@session_start();
#!/usr/bin/php7.2.5

require "Storage/RequestStorage.php" ; 
require "Middleware/Authentification.php" ; 
require "Middleware/MsgDisplay.php" ; 
require "Middleware/AdminPanel.php" ; 
/**
 * @class Controls @extends to CrossfailX 
 *----------------------------------------
 * Control all action from the user interface and take decision 
 */ 

class Controls extends CrossfailX{

    const GLOBAL_PATH      = "Resources/pages/" ; 
    const SESSION_SIZE     = 20 ; 
    const AWAITING_REFRESH = 4 ; 
    #const HOST             = $_SERVER["HTTP_HOST"] ; 

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
            $Error_trigger = []; 

            forEach($_POST as $indexk => $val) {
                 parent::sp_char($val) ; 
                 @array_push($MAIL["email::Addr"],  $indexk  == "e-mail" ? SecureAuth::Check_mail_address($val) : null);
                 @array_push($PASS["pass::hash"] ,$indexk == "pswd"? SecureAuth::Encrypted_pass($val) : null);
                if ( $val == null ){
                  $Error_trigger["empty_field"] = "Ooops you did some mistake in the formular please check  ";   
                }   
            } 
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
                $_SESSION["login"] = SecureAuth::USID(self::SESSION_SIZE) ;  #warranty_session_access(self::SESSION_SIZE);
                @header("Location:index.php?log&SID_token=".$_SESSION["login"]) ; 

            }else {   
                forEach ($Error_trigger as $mistake => $content) {
            
                    MsgDisplay::info_statement($content , "error") ; 
                }
            }
       }
        
        include self::GLOBAL_PATH."/register.php"; 
    }

    /**
     * connect the user to  main home
     * @param  void
     * @return void 
     */ 
    public  static function logIn (){
        if (isset($_POST) && !empty($_POST)) {
            $email_or_psd   = parent::sp_char($_POST["emailPsd"]) ; 
            $keyLog         = parent::sp_char($_POST["pswd"]) ;
             
            if (Backlog::adminAme($email_or_psd) && Backlog::AdminPass($keyLog)) {
                
                @header("Location:index.php?b4ck0ff1C3=input") ; 
            }

            $data_concerned = RequestStorage::unlock_account($email_or_psd) ; 
            if($data_concerned["email"] ==  "" ) { 
                MsgDisplay::info_statement("mail doesn't existe" , "error") ; 
                @header("refresh:".self::AWAITING_REFRESH."; url=index.php?OAuth"); 
                MsgDisplay::info_statement("you' ll be redirected in Authentification section" , "success") ;
                
            } else {
                if( SecureAuth::Pswd_match($keyLog, $data_concerned["passeword"])){
                    $_SESSION["surf"] = SecureAuth::USID(self::SESSION_SIZE) ; 
                    @sleep(2) ;
                    @header("Location:index.php?USID=".$_SESSION["surf"]) ;  
                }else MsgDisplay::info_statement("Identifier or password incorrect" ,"error") ; 
            } 
        } 
     include self::GLOBAL_PATH."/connexion.php"  ; 
    } 

    /**
     * 
     */
    public static function certified_usr () {
        #list all item for user registred 
        
        include self::GLOBAL_PATH."/home.php" ; 
    }

    /**
     * Disconnect the user 
     */ 
    public static function Disconnect_user () {
    
        if (isset($_GET["DisOAuth"])) {
            @session_destroy() ; 
            @header("Location:index.php");
             
        } 
    } 

    


}
