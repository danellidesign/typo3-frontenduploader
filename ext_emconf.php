<?php
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
$EM_CONF[$_EXTKEY] = [
    'title' => 'Frontenduploader',
    'description' => 'FE Uploader',
    'category' => 'plugin',
    'author' => 'Danny Hirsch',
    'author_company' => 'DH Design & Software',
    'author_email' => 'danny@byakko.eu',
    'state' => 'alpha',
    'clearCacheOnLoad' => true,
    'version' => '0.0.0',
    'constraints' => [
        'depends' => [
        'typo3' => '8.7.0-8.9.99',
        ],
    ],
    'autoload' => [
        'psr-4' => [
        'Danny\\Frontenduploader\\' => 'Classes'
        ],
    ],
];