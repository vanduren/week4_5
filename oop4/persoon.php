<?php
// Voortaan gebruiken we de naam van de class als bestandsnaam
class Persoon{
    var $naam;
    public $lengte;
    private $pinNummer;

    function __construct($persoon_naam, $persoon_lengte){
        $this->naam = $persoon_naam;
        $this->lengte = $persoon_lengte;
    }
    
    function set_naam($nieuwe_naam){
        $this->naam = $nieuwe_naam;
    }
    
    function get_naam(){
        return $this->naam;
    }

    function set_lengte($nieuwe_lengte){
        $this->lengte = $nieuwe_lengte;
    }

    function get_lengte(){
        return $this->lengte;
    }

    function set_pinNummer($nieuwe_pinNummer){
        $this->pinNummerpinNummer = $nieuwe_pinNummer;
    }

}
?>