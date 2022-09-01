<DOCTYPE! html>
<html lang="nl">
<head>
    <title>H4</title>
</head>
<body>
<p>
    <?php
    $time = date("H");
    switch ($time) {
        case ($time >= 6 && $time < 12):
            echo "Het is och tend";
            break;
        case ($time >= 12 && $time < 18):
            echo "Het is Midday";
            break;
        case ($time >= 18 && $time < 24):
            echo "Het is Avoid";
            break;
        case 3:
            echo "Het is Nacho";
            break;
    }
    ?>
</p>
</body>
</html>
<?php
