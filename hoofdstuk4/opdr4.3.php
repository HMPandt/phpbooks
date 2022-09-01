<DOCTYPE! html>
<html lang="nl">
<head>
    <title>H4</title>
</head>
<body>
<p>
    <?php
    $first = 32;
    $second = 21;
    if($first > $second){
        $uitKomst = $first * 2 + $second;
    } else {
        $uitKomst = $second * 2 + $first;
    }
    echo "uitkomst = $uitKomst";
    ?>
</p>
</body>
</html>
<?php

