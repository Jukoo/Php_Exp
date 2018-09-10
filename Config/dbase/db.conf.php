<?

/*
 * ______________________________________________
 *
 * this file contains the main key to connection  
 *          the storage / Database  
   _______________________________________________
 */

@define("DB_host" , "localhost") ; 
@define("DB_name" , "Ecom") ; 
@define("DB_ENCODE" , "utf8") ; 
@define("DB_DEFAULT_USER" , "root") ; 
@define("DB_PSWD" , "") ; 

###### Allow Verbose Mode  ##### 

@define("RANDY" ,[\PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION]) ; 

@define("RACKETY",[\PDO::ATTR_ERRMODE => \PDO::ERRMODE_WARNING ]); 

##### FETCH MODE #####

//@define("ARRAY_TO_OBJ" ,[PDO::DEFAULT_FETCH_MODE => PDO::FETCH_OBJ])  ;
