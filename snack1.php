<?php
    $matches = [
        [
            'squadre' => 'Banco di Sardegna Sassari - Betram Yachts Derthona Tortona',
            'punteggio' => '50 - 60'
        ],
        [
            'squadre' => 'Carpegna prosciutto Pesaro - Dolomiti Energia Trentino',
            'punteggio' => '32 - 58'
        ],
        [
            'squadre' => 'EA7 Emporio Armani Milano - Germani Brescia',
            'punteggio' => '73 - 48'
        ],
        [
            'squadre' => 'GeVi Napoli Basket - Givova Scafati',
            'punteggio' => '35 - 38'
        ],
        [
            'squadre' => 'Happy Casa Brindisi - NutriBullet Treviso Basket',
            'punteggio' => '63 - 58'
        ],
        [
            'squadre' => 'Openjobmetics Varese - Pallacanestro Trieste',
            'punteggio' => '72 - 65'
        ],
        [
            'squadre' => 'Tezenis Verona - Umana Reyer Venezia',
            'punteggio' => '83 - 56'
        ],
        [
            'squadre' => 'UNAHOTELS Reggio Emilia - Virtus Segafredo Bologna',
            'punteggio' => '48 - 53'
        ],
    ]
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <ul>
            <?php foreach ($matches as $match) {?>
                <li><?php echo $match['squadre'].' | '.$match['punteggio']; ?></li>
            <?php }?>
        </ul>
    </body>
</html>