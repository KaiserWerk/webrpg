<?php

config('templateDirectories',
    [
        __DIR__ . '/../templates/default/',
        __DIR__ . '/../templates/'
    ]
);

config('locationModifiers',[
    'north' => [
        'x' => 0,
        'y' => -1
    ],
    'east' => [
        'x' => 1,
        'y' => 0
    ],
    'south' => [
        'x' => 0,
        'y' => +1
    ],
    'west' => [
        'x' => -1,
        'y' => 0
    ]
]);
config('equipmentSlots', [
    0 => 'head',
    1 => 'armor',
    2 => 'weapon-right',
    3 => 'weapon-left',
    4 => 'ring-left',
    5 => 'ring-right'
]);

config('initialLocation', [
    'map' => 'city',
    'x' => 10,
    'y' => 5,
    'viewDirection'=>'south'
]);

config('viewport', [
    'width' => 11,
    'height' => 7
]);

config('tileSize', [
    'width' => 64,
    'height' => 64
]);

config('initialEquipment', [
    'male.warrior' => [
        0 => 'plateArmor',
        1 => 'plateArmor',
        2 => 'sword',
        3 => 'shield'
    ],
    'female.warrior' => [
        0 => 'plateArmor',
        1 => 'plateArmor',
        2 => 'sword',
        3 => 'shield'
    ],
    'male.ranger' => [
        0 => 'leatherArmor',
        1 => 'leatherArmor',
        2 => 'bow'
    ],
    'female.ranger' => [
        0 => 'leatherArmor',
        1 => 'leatherArmor',
        2 => 'bow'
    ],
    'male.mage' => [
        0 => 'clothing',
        1 => 'clothing',
        2 => 'staff',
    ],
    'female.mage' => [
        0 => 'clothing',
        1 => 'clothing',
        2 => 'staff',
    ],
]);

config('moduleFolder', ROOT_DIR . '/source');
