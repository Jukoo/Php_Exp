<? 
require_once "accesStorage.php" ; 

/**
 * @class StorageManager @extends Connexion 
 */ 

class  storageManager extends connexion  {

    /**
     * shut down the connexion  on wrong request 
     * @param void 
     * 
     */ 

    public function bail ()  {
        
        return parent::SQl_drop_down(parent::Dsn()) ; 
    }
  
    # REQUEST 
}

