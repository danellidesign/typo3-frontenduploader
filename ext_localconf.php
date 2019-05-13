<?php
/**
 * Created by PhpStorm.
 * User: danny
 * Date: 13.05.2019
 * Time: 20:46
 */

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'Danny.frontenduploader',
    'Frontenduploader',
    [
        'Uploader' => 'add,store'
    ]
);