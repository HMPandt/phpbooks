<DOCTYPE! html>
<html lang="nl">
<head>
    <title>H4</title>
</head>
<body>
<p>
    <?php
    $time = date("G");
    if ($time >= 6 && $time < 12){
        echo "Het is och tend";
    } elseif ($time >= 12 && $time < 18){
        echo "Het is midday";
    } elseif ($time >= 18 && $time < 24){
        echo "Het is avoid";
    } else{
        echo "Het is nacho";
    }
    ?>
</p>
</body>
</html>
<?php
