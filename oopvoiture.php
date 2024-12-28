<?php
class voiture {
    public $marque ;
    public $model ;
    public $année ;
    public function __construct($marque,$model,$année) {
        $this->marque = $marque;
        $this->model = $model;
        $this->année = $année;
    }
    function getDetails(){
        echo "la marque est:".$this->marque.",modele:".$this->model.",année:".$this->année ;
    
    }
    function setAnnée($année){
        $this->année=$année ;
    }
}
$v1=new voiture ('volsvagin','Golf',2022);
$v1->getDetails();
$v2=new voiture ('Marcedes','Marcedes-ClasseA',2023);
$v2->setAnnée(2024);
$v2->getDetails();






?>