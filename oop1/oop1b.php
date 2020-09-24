<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>OOP1</title>
    <!-- voeg de class toe aan je pagina -->
    <?php include('oop1a.php') ?>
</head>
<body>
    <?php
        // instantieer de class. dat is:
        // je maakt een object gebaseerd op de class
        $sara = new persoon();
        // het mag met of zonder (). Zodra je  parameters gaat meegeven zijn de haakjes nodig
        $gilles = new persoon();
        // $sara en $gilles zijn gebaseerd op zelfde class
        // ze zijn verschillende objecten
        // het instellen van een eigenschap mbv de setter
        $sara->set_naam("Sara Schrijvers");
        $gilles->set_naam("Gilles Gevers");
        // En nu de eigenschap uitlezen mbv de getter
        echo "Sara's volledige naam is: " . $sara->get_naam();
        echo "<br>";
        echo "Gilles's volledige naam is: " . $gilles->get_naam();
        // wat ook kan: $gilles->naam
        // dit is niet de bedoeling. Gebruik altijd de getter en setter
    ?>
</body>
</html>