<?php
/**
 * Created by PhpStorm.
 * User: danny
 * Date: 13.05.2019
 * Time: 20:50
 */

defined('TYPO3_MODE') || die();

call_user_func(function()
{
   $extensionKey = 'frontenduploader';

   \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
       $extensionKey,
       'Configuration/TypoScript',
       'Frontenduploader'
   );
});