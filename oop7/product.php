<?php
class Product{
    private $id;
    private $naam;
    private $prijs;

    function __construct($product_id, $product_naam, $product_prijs){
        $this->id = $product_id;
        $this->naam = $product_naam;
        $this->prijs = $product_prijs;
    }
    
    function set_id($nieuwe_id){
        $this->id = $nieuwe_id;
    }
    
    function get_id(){
        return $this->id;
    }

    function set_naam($nieuwe_naam){
        $this->naam = $nieuwe_naam;
    }
    
    function get_naam(){
        return $this->naam;
    }

    function set_prijs($nieuwe_prijs){
        $this->prijs = $nieuwe_prijs;
    }
    
    function get_prijs(){
        return $this->prijs;
    }
}
?>