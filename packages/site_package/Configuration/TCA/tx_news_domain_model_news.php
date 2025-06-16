<?php
defined('TYPO3') || die();

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

(function () {
    ExtensionManagementUtility::addTCAcolumns('tx_news_domain_model_news', [
        'location' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:site_package/Resources/Private/Language/locallang_db.xlf:location',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim,required',
            ],
        ],
        'date' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:site_package/Resources/Private/Language/locallang_db.xlf:date',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'eval' => 'datetime',
                'default' => 0,
            ],
        ],
        'organizer' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:site_package/Resources/Private/Language/locallang_db.xlf:organizer',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
            ],
        ],
        'price' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:site_package/Resources/Private/Language/locallang_db.xlf:price',
            'config' => [
                'type' => 'input',
                'eval' => 'trim',
            ],
        ],
        'website' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:site_package/Resources/Private/Language/locallang_db.xlf:website',
            'config' => [
                'type' => 'input',
                'eval' => 'trim,lower,required',
                'renderType' => 'inputLink',
            ],
        ],
    ]);

    ExtensionManagementUtility::addToAllTCAtypes(
        'tx_news_domain_model_news',
        '--div--;LLL:EXT:site_package/Resources/Private/Language/locallang_db.xlf:tab,location,date,organizer,price,website',
        '',
        'after:bodytext'
    );
})();

