<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>producten</title>
    <?php spl_autoload_register(); ?>
</head>
<body>
    <?php
        // de data in multidimensionale array
        $productenArray = array(array(1,'boter', 2.50), array(2,'kaas',3.10), array(3,'eieren', 1.80));
        // array voor alle product objecten
        $producten = array();
        // de data in de objecten zetten
        foreach($productenArray as $productArray){
            // voeg nieuw object toe aan array van product objecten
            // en vul die met gegevens uit productArray
            $producten[] = new product($productArray[0], $productArray[1], $productArray[2]);
        }
        // objecten tonen
        echo "<table>";
        foreach($producten as $product){
            echo "<tr>";
            echo "<td>" . $product->get_id() . "</td>";
            echo "<td>" . $product->get_naam() . "</td>";
            echo "<td>" . $product->get_prijs() . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    ?>
</body>
</html>