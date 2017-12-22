<?php 

class charters {

    public function __construct($name){
        $this->name = $name;
     }
   
    public $life = 80;
    public $strike = 40 ; 

    public function cry ()
{
    echo "AYayayyayayayay" ; 
}
 public function lifeup($vital=null) {

    echo   !$vital?"Regeneration total ".$this->life = 100 : "personnage regenerer avec ".$this->life +=$vital." de vie " ;
 }

public function hurt($target) {
     $target->life -= $this->strike ;
} 

    public function dead() {

    echo $this->life > 0 ?  "le personnage est toujours vivant ": " il est mort avec ".$this->life;


    }
    
}

