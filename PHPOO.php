<?php 
class Pokemon{
    public $pv = 60;
    public $att = 35;
    public $name;

    public function __construct($name){
        $this->name = $name;
    }

    public function Potion(){
        return $this -> pv = $this -> pv +20;
    }

    public function Soin($pp = null){
        if(is_null($pv)){
            $this->pv = 60;
        }else{
            $this->pv = $this->pv + $pp;
        }
    }
    public function attaque($cible){
        return $cible->pv -= $this->att;
    }
    public function KO(){
        return $this->pv <= 0;
        } 
}
?>