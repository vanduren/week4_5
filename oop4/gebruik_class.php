<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>OOP4</title>
    <?php include('Student.php') ?>
</head>
<body>
    <?php
        $sara = new Student("Sara Schrijvers", 1.72, "AO1c");
        $gilles = new Student("Gilles Gevers", 1.85, "AO1d");

        echo "Sara's volledige naam, lengte en klas: " . $sara->get_naam() . " " . $sara->get_lengte() . " " . $sara->get_klas();
        echo "<br>";
        echo "Gilles's volledige naam, lengte en klas: " . $gilles->get_naam() . " " . $gilles->get_lengte() . " " . $gilles->get_klas();
        echo "<br>";
    ?>
</body>
</html>