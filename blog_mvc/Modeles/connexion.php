<?php 
Namespace juko\blogs; 

Use \PDO ; 

/**
 * database connexion 
 * @param void
 * @return $data 
 */
class DataBase {
	
	protected function DB() { 
		
			try { 
					$dataBase = new PDO('mysql:host=localhost;dbname=blogs;charset=utf8',"root","",[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]) ; 

					$dataBase->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ) ; 

					return $dataBase;

				}catch (Exception $err) { 

						die('Cannot connect to the server  '.$err->getMessage());
				}

	}

	 

	protected function Kill ($db) {

		die(print_r($db->errorInfo())) ; 

	 }
}