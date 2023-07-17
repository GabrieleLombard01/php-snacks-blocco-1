<?php

// Array:
$matches = [
    [
        'team-home' => [
            'name' => 'Olimpia Milano',
            'points' => 55
        ],
        'team-away' => [
            'name' => 'Cantù',
            'points' => 60
        ]
    ],
    [
        'team-home' => [
            'name' => 'Atlanta Hawks',
            'points' => 25
        ],
        'team-away' => [
            'name' => 'Oklahoma City Thunder',
            'points' => 70
        ]
    ],
    [
        'team-home' => [
            'name' => 'Chicago Bulls',
            'points' => 15
        ],
        'team-away' => [
            'name' => 'Cleveland Cavaliers',
            'points' => 20
        ]
    ],
    [
        'team-home' => [
            'name' => 'Denver Nuggets',
            'points' => 45
        ],
        'team-away' => [
            'name' => 'Milwaukee Bucks',
            'points' => 10
        ]
    ],
    [
        'team-home' => [
            'name' => 'Denver Nuggets',
            'points' => 35
        ],
        'team-away' => [
            'name' => 'Washington Wizards',
            'points' => 10
        ]
    ]
];
// I nomi delle squadre sono totalmente a caso, esperti di basket non odiatemi <3
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First snack</title>
</head>

<body>
    <h1>Matches calendar:</h1>
    <ul>
        <?php foreach ($matches as $match) : ?>
            <li></li>
        <?php endforeach ?>
    </ul>
</body>

</html>