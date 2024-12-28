<?php
class Etudiant {
    public $nom;
    public $prénom;
    public $note=[];
    public function __construct($nom,$prénom){
        $this->nom =$nom;
        $this->prénom =$prénom;
    }
    function ajouterNote($note){
        if($note>=0 && $note<=20){
        $this->note[]=$note;
        echo "le note a été ajouter avec succée";
        }
        else{
            echo "corrigé votre note";
        }

    }
    function calculerMoyenne(){
        if(count($this->note)===0){
            echo" le tableau est vide";
            return ;
        }
        $summ=array_sum($this->note);
        $Moyenne=$summ/count($this->note);
        echo "l'etudiant ".$this->nom." ". $this->prénom. " votre moyenne est: ".$Moyenne ;
        return round($Moyenne,2);
    }
    function afficherTableau(){
        echo"<table border='1' style='border-collapse: collapse;>";
        echo"<tr><th>les notes </th></tr>";
        foreach ($this->note as $note) {
        echo"<tr><td>".$note."</td></tr>";
        }
        echo" </table>";
    }
}
$E=new Etudiant("islem","amir hassan");
$E->ajouterNote(15);
$E->ajouterNote(18);
$E->ajouterNote(16);
$E->ajouterNote(19);
$E->calculerMoyenne();
$E->afficherTableau();
?>