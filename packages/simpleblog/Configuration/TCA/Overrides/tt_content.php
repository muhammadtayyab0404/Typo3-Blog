<?php
defined('TYPO3_MODE') || die();

// Include FlexForm of plugin "Bloglisting" of extension EXT:simpleblog
$pluginSignature = 'simpleblog_bloglisting';
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
    $pluginSignature,
    'FILE:EXT:simpleblog/Configuration/FlexForms/Simpleblog_Bloglisting.xml'
);