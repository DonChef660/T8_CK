<?php

if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}


// Add Plugin Configs
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'CKEditor');