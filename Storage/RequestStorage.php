<? 
require "accesStorage.php"; 

/**
 * @class RequestStorage @extends Connexion  
 * -----------------------------------------
 * I/O the data into DataBase Storage 
 */ 

class RequestStorage extends Connexion { 


    private static function QueryFail() {
    
         return parent::SQl_drop_down(parent::Dsn()) ;
    } 
    /**
     *
     * @param 
     * @return 
     */ 
    public static function listAllitems ()  {} 

    /**
     *
     * @param 
     * @return
     */ 
    public static function showSingleOne (int $id){}

    /**
     * Save new User in DataBase Storage 
     * @param string $psd , $email , $psw , $addr , $city
     * @return void 
     */ 
    public static function User_Register ($psd , $email , $psw , $addr , $city ){
        
        $ql = parent::Dsn()->prepare("INSERT  INTO Authentification(pseudo , email ,passeword , address , city) 
                                      VALUES(:psd , 
                                          :email , 
                                          :passeword ,
                                          :addr ,  
                                          :city)") or self::QueryFail() ; 


        $ql->bindValue(":psd" ,     $psd ,   PDO::PARAM_STR); 
        $ql->bindValue(":email" ,   $email , PDO::PARAM_STR);
        $ql->bindValue(":passeword",$psw ,   PDO::PARAM_STR);
        $ql->bindValue(":addr" ,    $addr,   PDO::PARAM_STR);
        $ql->bindValue(":city" ,    $city ,  PDO::PARAM_STR);

        $ql->execute() ; 

    }

    /**
     * verify if user is already registered 
     * @param string $pseudo 
     * @return int 
     */
    public static function isAlready_registred (string $pseudo) {

        $ql = parent::Dsn()->prepare("SELECT * FROM Authentification 
                                       WHERE pseudo = :psd  "
                                    ) or self::QueryFail() ; 

        $ql->bindValue(":psd" , $pseudo , PDO::PARAM_STR); 
        $ql->execute() ; 
        $data_fetcher = $ql->fetch() ; 
        return $data_fetcher ;
         
    }

    /**
     * do comparatif with  the current user and data in  the Storage 
     * @param string $email 
     * @return int 
     */
    public static function unlock_account (string $email_or_pseudo ) {

        $ql = parent::Dsn()->prepare("SELECT  * FROM Authentification 
                                      WHERE  email = :email or pseudo = :psd") or self::QueryFail();
        $ql->bindValue(":email" , $email_or_pseudo  , PDO::PARAM_STR) ; 
        $ql->bindValue(":psd" , $email_or_pseudo , PDO::PARAM_STR) ; 
        $ql->execute() ; 

        $data_comparaison = $ql->fetch() ; 

        return $data_comparaison ; 

    }
}
