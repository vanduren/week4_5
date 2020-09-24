<?php
class Vierkant extends Tekenobject{
    protected $zijde; //height en width zijn gelijk

    function __construct($vierkant_achtergrondkleur, $vierkant_transparantie, $vierkant_zijde){
        $this->achtergrondkleur = $vierkant_achtergrondkleur;
        $this->transparantie = $vierkant_transparantie;
        $this->zijde = $vierkant_zijde;
    }

    public function set_zijde($nieuwe_zijde){
        $this->zijde = $nieuwe_zijde;
    }
    public function get_zijde(){
        return "height: " . $this->zijde . 'px;width:' . $this->zijde . 'px;';
    }

    public function toon_vierkant(){
        $vstijl = "style='" . $this->get_zijde() . "background-color: " . $this->achtergrondkleur . ";opacity: " . $this->transparantie . ";'";
        $div = "<div " . $vstijl . "></div>";
        return $div;
    }
}
?>