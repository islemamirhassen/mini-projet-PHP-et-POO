<?php
class Produit {
    public $nom ;
    public $price ;
    public $Quantity ;
    public function __construct($nom,$price,$Quantity){
    $this->nom=$nom;
    $this->price=$price;
    $this->quantity=$Quantity;
    }
    function getInfoProduit(){
        echo "c'est du ".$this->nom." avec du prix ".$this->price." et quantité ".$this->quantity ;
    }
    function ajouterQuantité($quantity){
        if($quantity>0){
            $this->quantity+=$quantity;
            echo"<br<vous avez ajouter ".$quantity." kg.";
        }
        else{
            echo"<br>la quantité doit étre positif";
        }
    }
    function RetirerQuantité($quantity){
        if($quantity>0){
            if($this->quantity>=$quantity){
            $this->quantity-=$quantity;
            echo "<br> vous avez retirez ".$quantity." kg.";
        }else{
            echo "<br> il faut diminuer la quantité est supérieur";
        }
        }
        else{
            echo "<br> la quantité doit étre positif";
        }
    }
}
$p=new Produit("tomate",1450,200);
$p->ajouterQuantité(100);
$p->getInfoProduit();
$p2=new Produit("pomme",2500,300);
$p2->RetirerQuantité(250);
$p2->getInfoProduit();
$p2->RetirerQuantité(100);

?>