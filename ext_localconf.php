<?php
defined('TYPO3') || die('Access denied.');

$disableGlobally = \Netflow\NfDarkmodeDisable\Config::getInstance()->disableGlobally();

$GLOBALS['TYPO3_CONF_VARS']['BE']['stylesheets']['nf_darkmode_disable'] = $disableGlobally ? 'EXT:nf_darkmode_disable/Resources/Public/css/global-override.css' : 'EXT:nf_darkmode_disable/Resources/Public/css/login-override.css';

if ($disableGlobally) {
    $GLOBALS['TYPO3_CONF_VARS']['BE']['defaultUserTSconfig'] = 'setup.fields.colorScheme.disabled = 1';
}


