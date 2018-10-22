<? 
require_once "accesStorage.php" ; 

/**
 * @class StorageManager @extends Connexion
 * this class contains all Sql request for admin action  
 */ 
class  storageManager extends connexion  {

    private static function bindingValue () {
        
    }
    /**
     * shut down the connexion  on wrong request 
     * @param void 
     * @return void  
     */ 

    public static function bail ()  {
        
        return parent::SQl_drop_down(parent::Dsn()) ; 
    }
    /**
     * Insert  item into dataStorage 
     * @param string $itname , $itdesc , $itprice  , $itfoto
     * @return  void 
     */

    public static function Insertion ($itname , $itdesc , $itprice  ,$itfoto) { 
        $ql = parent::Dsn()->prepare("INSERT INTO items (
                                     item_name , 
                                     item_desc, 
                                     item_price
                                     item_foto)
                                     VALUES (
                                     :it_name , :it_desc 
                                     ,:it_price ,it_foto)") or self::bail();
        $ql->bindValue(":it_name" , $itname , PDO::PARAM_STR) ;
        $ql->bindValue(":it_desc" , $itdesc , PDO::PARAM_STR) ;
        $ql->bindValue(":it_price" , $itprice , PDO::PARAM_STR) ;
        $ql->bindValue(":it_foto" , $itfoto, PDO::PARAM_STR) ;
        $ql->execute()  ; 


    }
    /**
     * Update item  in dataStorage 
     * @param integer $URI_id 
     * @return void 
     */
    public static function Up2Date (integer  $URI_id) {

        $ql= parent::Dsn()->prepare("UPDATE SET item where ID = :id_from_url")
            or self::bail() ; 
        $ql->bindValue(":id_from_url" , $URI_id ,PDD::PARAM_INT) ; 
         $ql->execute () ; 
    }  

    /** 
     * delete item in dataStorage 
     * @param integer $target_uri  
     * @return void 
     */ 
    public static function del (integer $target_uri ) {
        $ql=parent::Dsn()->prepare("DELETE item where ID = :traget_url") or self::bail() ; 
        $ql->bindValue(":target_url" , $target_uri , PDO::PARAM_INT) ; 
        $ql->execute() ; 
    } 

    public static function SelectItem() {
    
    }
}

