<?php

$posts = [
    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele papagni',
            'text' => 'testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Michele papagni',
            'text' => 'testo post 2'
        ],
    ],
    '10/02/2019' => [
        'title' => 'Post 3',
        'author' => 'Michele papagni',
        'text' => 'testo post 3'
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Michele papagni',
            'text' => 'testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Michele papagni',
            'text' => 'testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Michele papagni',
            'text' => 'testo post 6'
        ],
    ]
];
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
            <?php foreach($posts as $data => $valore) { ?>
                <li>
                    <?php echo $data ?>
                </li>
                    <ul>
                        <?php foreach($valore as $chiave => $valore) { ?>
                            <?php if (is_string($valore)) { ?>
                                <li>
                                    <?php echo $valore ?>
                                </li>
                            <?php } else { foreach($valore as $chiave => $valore) {  ?>
                                <li>
                                    <?php echo $valore ?>
                                </li>
                            <?php }} ?>
                        <?php } ?>
                    </ul>
            <?php } ?>
        </ul>
    </body>
</html>