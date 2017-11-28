<?php
defined('TYPO3_MODE') or die();
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:T8_CK/Configuration/TSConfig/rte.txt">');
$GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['T8Custom'] = 'EXT:T8_CK/Configuration/RTE/Default.yaml';