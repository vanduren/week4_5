<?php
// Maak een class

class persoon{
    // variabele in class heet eigenschap
    var $naam;
    // functie in class heet methode
    function set_naam($nieuwe_naam){
        $this->naam = $nieuwe_naam;
    }
    // de setter en getter zijn functies die in allerlei talen voorkomen
    // om de eigenschappen in te stellen of weer te geven
    // de set en get wordt meestal gevolgd door naam van eigenschap (conventie)
    function get_naam(){
        return strtoupper($this->naam);
    }
    // $this wordt gebruikt om het object aan te spreken
    // dat gebruikt wordt, zodra class is geïnstantieerd (gebruikt wanner object is gemaakt)
}

?>