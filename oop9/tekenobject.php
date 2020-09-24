<?php
class Tekenobject{
    private $achtergrondkleur;
    private $transparantie;

    function __construct($tekenobject_achtergrondkleur, $tekenobject_transparantie){
        $this->achtergrondkleur = $tekenobject_achtergrondkleur;
        $this->transparantie = $tekenobject_transparantie;
    }

    public function set_achtergrondkleur($nieuwe_kleur){
        $this->achtergrondkleur = $nieuwe_kleur;
    }
    public function get_achtergrondkleur(){
        return "background-color: " . $this->achtergrondkleur . ';';
    }

    public function set_transparantie($nieuwe_transp){
        $this->transparantie = $nieuwe_transp;
    }
    public function get_transparantie(){
        return "opacity: " . $this->transparantie . ';';
    }
}

?>