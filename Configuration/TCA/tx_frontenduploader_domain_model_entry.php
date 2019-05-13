<?php
/**
 * Created by PhpStorm.
 * User: danny
 * Date: 13.05.2019
 * Time: 21:46
 */

return [
    'ctrl' => [
        'title' => 'Titel',
        'label' => 'uid'
    ],
    'columns' => [
        'name' => [
            'label' => 'Name',
            'config' => [
                'type' => 'input',
                'size' => '20',
                'eval' => 'trim'
            ],
        ],
        'description' => [
            'label' => 'Beschreibung',
            'config' => [
                'type' => 'input',
                'size' => '20',
                'eval' => 'trim'
            ],
        ],
        'image1' => [
            'label' => 'Bild Eins',
            'config' => [
                'type' => 'input',
                'size' => '20',
                'eval' => 'trim',
                'foreign_match_fields' => [
                    'fieldname' => 'image1',
                    'tablenames' => 'tx_frontenduploader_domain_model_entry',
                    'table_local' => 'sys_file',
                ]
            ],
        ],
    ],
    'types' => [
        '0' => ['showitem' => 'image1'],
    ],
];