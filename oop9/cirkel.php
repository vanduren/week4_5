<?php
class Cirkel extends Tekenobject{
    protected $zijde; //height en width zijn gelijk
    protected $radius;

    function __construct($cirkel_achtergrondkleur, $cirkel_transparantie, $cirkel_zijde, $cirkel_radius){
        $this->achtergrondkleur = $cirkel_achtergrondkleur;
        $this->transparantie = $cirkel_transparantie;
        $this->zijde = $cirkel_zijde;
        $this->radius = $cirkel_radius;
    }

    public function set_zijde($nieuwe_zijde){
        $this->zijde = $nieuwe_zijde;
    }
    public function get_zijde(){
        return "height: " . $this->zijde . 'px;width:' . $this->zijde . 'px;';
    }

    public function set_radius($nieuwe_radius){
        $this->radius = $nieuwe_radius;
    }
    public function get_radius(){
        return "border-radius: " . $this->radius . '%;';
    }

    public function toon_cirkel(){
        $vstijl = "style='" . $this->get_zijde() . "background-color: " . $this->achtergrondkleur . ";opacity: " . $this->transparantie . ";" . $this->get_radius() . ";'";
        $div = "<div " . $vstijl . "></div>";
        return $div;
    }
}
?>