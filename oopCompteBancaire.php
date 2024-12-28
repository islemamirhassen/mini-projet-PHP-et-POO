<?php
class CompteBancaire {
    public $titulaire ;
    public $Solde;
    public $NuméroDuCompte ;
    public function __construct($titulaire,$Solde,$NuméroDuCompte){
        $this->titulaire =$titulaire;
        $this->Solde =$Solde;
        $this->NuméroDuCompte =$NuméroDuCompte;
    }
    function AugmenterSolde($Montant){
        if($Montant>0){
            $this->Solde+=$Montant;
            echo "le montant a eté ajouté".$Montant ;
        }else{
            echo "le montant doit étre positif";
        }
    }
    function DiminuerSolde($Montant){
        if($Montant>0){
            if($this->Solde>=$Montant){
                $this->Solde-=$Montant;
                echo "<br>le Montant a été diminuer".$Montant;
            }else{
                echo "votre Solde est insuffisant pour retirer ".$Montant;
            }
            }else{
                echo "le montant doit étre positif";
            }

    }
    function getSolde(){
        echo"<br>votre solde est".$this->Solde ;
    }
    function getDetails(){
        echo "<br>votre profession est ".$this->titulaire." avec solde ".$this->Solde." et numéro du compte ".$this->NuméroDuCompte;
    }
    
}
$c1=new CompteBancaire('designer',1000,5566322);
$c1->AugmenterSolde(150);
$c1->getSolde();
$c2=new CompteBancaire('developpeur Web',2000,122365455);
$c2->getDetails();
$c2->DiminuerSolde(70);
$c2->getSolde();
$c2=new CompteBancaire('Marketeur',1500,122365455);
$c2->getDetails();
$c2->DiminuerSolde(1700);
$c2->getSolde();

?>