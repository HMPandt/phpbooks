<DOCTYPE! html>
<html lang="nl">
<head>
    <title>FirstOne</title>
</head>
<body>
<p>
    <?php
    $today = date( "l j F Y");
    echo "Het is vandaag $today <br>";
    $now = date( "z" );
    echo "Vandaag is het de $now dag van het jaar <br>";
    $when = date("w" );
    echo "Thursday is de $when dag van de week <br>";
    $month = date("t");
    echo "De maand September heeft in totaal $month dagen <br> <br>";
    $year = date("Y");
    $leapyear = date("L");
    if ($year > $leapyear)
        echo "Het jaar $year is geen schrikkeljaar";
    else
        echo "Het jaar $year is wel een schrikkeljaar";
    ?>
</p>
</body>
</html>
<?php