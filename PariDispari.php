<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pari e Dispari</title>
</head>
<body>
    <?php

    $numero = rand(0,1000);

    if ($numero%2 == 0){ 
        echo "<p>Il numero " . $numero . " e' pari";
    }else{ 
        echo "<p>Il numero " . $numero . " e' dispari";
    }

    ?>
</body>
</html>