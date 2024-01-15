<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Devine mon nombre !</title>
</head>
<body>
    <h1>Pense à un nombre entre 1 et 50 !
    <?php
        $nombre = 25;
        $nombreDeTentatives = 20;

        if ($nombre<0 || $nombre>50) {
            echo "Hé, tu triches ! On avait dit entre 0 et 50 !";
        } else {
    ?>
    <p>J'essaye de le deviner......</p>
    <?php
        $essais = 0;
        do {
            $tentative = rand(0,50);
            echo "Est ce que c'est $tentative ?";

            if ($tentative == $nombre) {
                echo "<h2>Oui !</h2>";
                break;
            } else {
                echo "Non...<br>";
            }
            $essais++;
        } while ($essais < $nombreDeTentatives);
        if ($tentative != $nombre) {
            echo "<br>Je n'ai pas trouvé =(";
            }
        }
?>
</body>
</html>