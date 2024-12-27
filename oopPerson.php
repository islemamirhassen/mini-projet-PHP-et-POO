<?php
class person {
    public $nom ;
    public $prenom ;
    public $adresse ;
    public function __construct($nom,$prenom,$adress) {
        $this->nom    = $nom;
        $this->prenom = $prenom;
        $this->adresse= $adresse;
}
    function getpersonne(){
        echo "Nom: {$this->nom}, Prénom: {$this->prenom}, Adresse: {$this->adresse}";
    }
    function set_adresse($adresse) {
        $this->adresse = $adresse;
    }
}
    $p= new person("islem","amirHassen","bizert");
    $p->set_adresse("Tunis");
    $p->getpersonne();
    ?>