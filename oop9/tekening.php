<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tekening</title>
    <?php spl_autoload_register(); ?>
</head>
<body>
    <?php
        $v1 = new Vierkant('#0000FF', '1', '20');
        echo $v1->toon_vierkant();
        $v2 = new Vierkant('#005555','0.5','40');
        echo $v2->toon_vierkant();
        $c1 = new Cirkel('#0000FF', '1', '20', '50');
        echo $c1->toon_cirkel();
    ?>
    <div style="position:absolute; top:0px">
        <p>En hier komt wat tekst</p>
        <p>En hier komt wat tekst</p>
        <p>En hier komt wat tekst</p>
        <p>En hier komt wat tekst</p>
        <p>En hier komt wat tekst</p>
        <p>En hier komt wat tekst</p>
        <p>En hier komt wat tekst</p>
    </div>
</body>
</html>