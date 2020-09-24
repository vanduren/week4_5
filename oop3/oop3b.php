<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>OOP3</title>
    <?php include('oop3a.php') ?>
</head>
<body>
    <?php
        $sara = new persoon("Sara Schrijvers", 1.72);
        $gilles = new persoon("Gilles Gevers", 1.85);

        echo "Sara's volledige naam en lengte: " . $sara->get_naam() . " " . $sara->get_lengte();
        echo "<br>";
        echo "Gilles's volledige naam en lengte: " . $gilles->get_naam() . " " . $gilles->get_lengte();
        echo "<br>";
        // en nu de pinpasnummer
        $sara->set_pinNummer("7688");
        // hier volgt foutmelding
        // pinpasnummer zal ergens in de code van de class verder gebruikt moeten worden
        // pinpasnummer is dus niet te benaderen (privé)
        echo $sara->pinNummer;
    ?>
</body>
</html>