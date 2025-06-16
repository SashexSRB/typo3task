<?php
defined('TYPO3') or die();

$GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects'][\GeorgRinger\News\Domain\Model\News::class] = [
    'className' => \Sashex\SitePackage\Domain\Model\EventNews::class,
];

$GLOBALS['TYPO3_CONF_VARS']['EXT']['news']['classes']['Domain/Model/News']['site_package'] = 'site_package';