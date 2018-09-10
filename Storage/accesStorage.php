<?
#!/usr/bin/php7.2.5
require "Config/dbase/db.conf.php";

/**
 * @class Connexion 
 * ---------------
 * the DataBase connexion  : 
 * Allowing access to interract with dataBase Storage 
 */ 

class  Connexion {

    protected  static $_dsn ;  

    /**
     * The entry point to the DB Storage 
     * @param void 
     * @return PDO 
     */
    private  static function Gate() {
        
        try{
            return  new PDO(
                    "mysql:host=".DB_host.";dbname=".DB_name.";charset=".DB_ENCODE , 
                    DB_DEFAULT_USER ,
                    DB_PSWD ,
                    RANDY
                    ) ; 
        }catch(Exception $error) {
            
            trigger_error("SomeThing Wrong".$error->getMessage() , E_USER_WARNING); 
        }
    }

   /**
    * Perf :: create one single connexion if var is empty or null 
    * @param void
    * @return new Instance Of PDO 
    */ 
   protected static function Dsn(){
   
        if(self::$_dsn == null){
        
            self::$_dsn = self::Gate() ; 
        }
        return self::$_dsn ; 
   }

    /**
     * close the connexion if error occured 
     * @param PDO $Db_instance 
     * @return void 
     */
    protected  static function SQl_drop_down (PDO $Db_instance) {
    
       die(printr($Db_instance->errorInfo())) ; 
   }


     
}
