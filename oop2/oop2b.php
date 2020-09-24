<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>OOP2</title>
    <?php include('oop2a.php') ?>
</head>
<body>
    <?php
        // bij het aanroepen en gebruik maken van de constructor
        // hoef je geen extra setter te gebruiken
        $sara = new persoon("Sara Schrijvers");
        $gilles = new persoon("Gilles Gevers");
        echo "Sara's volledige naam is: " . $sara->get_naam();
        echo "<br>";
        echo "Gilles's volledige naam is: " . $gilles->get_naam();
    ?>
</body>
</html>