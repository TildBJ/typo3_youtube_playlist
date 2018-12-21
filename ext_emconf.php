<?php

/***************************************************************
 * Extension Manager/Repository config file for ext: "youtube_playlist"
 *
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = [
    'title' => 'YouTube Playlist',
    'description' => 'This extension provides an interface to display a specific playlist on your page',
    'category' => 'plugin',
    'author' => 'Philipp Winterle',
    'author_email' => 'winterle.p@gmail.com',
    'state' => 'stable',
    'uploadfolder' => false,
    'createDirs' => '',
    'version' => '2.0.0-dev',
    'constraints' => [
        'depends' => [
            'vhs' => '2.4.0-4.2.99',
            'typo3' => '7.6.0-8.7.99',
        ],
        'conflicts' => [
        ],
        'suggests' => [
        ],
    ],
    'clearcacheonload' => false,
    'author_company' => NULL,
];

