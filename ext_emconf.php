<?php

$EM_CONF['nf_darkmode_disable'] = [
    'title' => 'Darkmode Disable',
    'description' => 'Disable dark mode in the TYPO3 backend.',
    'category' => 'plugin',
    'author' => 'Peter Schuhmann',
    'author_email' => 'peter.schuhmann@netflow.digital',
    'state' => 'stable',
    'createDirs' => '',
    'clearCacheOnLoad' => 0,
    'version' => '1.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '13.4.0-13.4.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
