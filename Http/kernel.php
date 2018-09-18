<?
/*------------------------------------------------------------|
 *                          K E R N E L [CORE]                |
 *------------------------------------------------------------|  
 *                                                            |  
 * this file contains all requires modules to run each classes|  
 * 1 - every files need to require first this file            |
 * Ex : require kernel.php                                    |
 */

 # Individual require file 

@define("AUTHENTIFICATION" ,  require "Middleware/Authentification.php") ;
@define("PREVENT_FAILL"    ,  require "Middleware/'CrossfailX.php") ; 
@define("BD.CONF"          ,  require "Config/dbase/db.conf.php") ; 


 # Http Router 

@define ("HTTP_ROUTE"  , require "Http/control.php") ; 


 # Display view 
 
@define ("DISPLAY"  , require "Resources/pages/Layout/Default.php") ;  
