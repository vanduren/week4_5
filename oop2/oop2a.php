<?php
class persoon{
    var $naam;
    // de construct methode wordt aangeroepen op het moment
    // dat je een object aanmaakt (class instantieert)
    // hier kun je de eigenschappen vullen
    function __construct($persoon_naam){
        $this->naam = $persoon_naam;
    }

    function set_naam($nieuwe_naam){
        $this->naam = $nieuwe_naam;
    }
    
    function get_naam(){
        return $this->naam;
    }
}
?>