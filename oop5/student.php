<?php
class Student extends Persoon{
    public $klas;
    
    function __construct($student_naam, $student_lengte, $student_klas){
        $this->naam = $student_naam;
        $this->lengte = $student_lengte;
        $this->klas = $student_klas;
    }
    
    function set_klas($nieuwe_klas){
        $this->klas = $nieuwe_klas;
    }
    
    function get_klas(){
        return $this->klas;
    }
}

?>