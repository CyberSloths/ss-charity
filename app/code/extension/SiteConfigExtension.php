<?php

namespace App\Extension;

use SilverStripe\Assets\Image;
use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\TextField;
use SilverStripe\ORM\DataExtension;
use SilverStripe\CMS\Model\SiteTree;
use SilverStripe\Forms\TextareaField;
use SilverStripe\Forms\TreeDropdownField;
use SilverStripe\AssetAdmin\Forms\UploadField;

class SiteConfigExtension extends DataExtension
{
    /**
     * Page database
     *
     * @var array
     */
    private static $db = [
        'HeaderButtonText' => 'Varchar',
        'PhoneNumber' => 'Varchar',
        'Email' => 'Varchar',
        'Facebook' => 'Varchar',
        'FooterSentence1' => 'Varchar',
        'FooterSentence2' => 'Varchar',
        'AlertTitle' => 'Varchar',
        'AlertContent' => 'Text',
        'FacebookLink' => 'Varchar',
        'FooterSentence2Link' => 'Varchar'
    ];

    /**
     * Page relationship of 1 of each items
     *
     * @var array
     */
    private static $has_one = [
        'HeaderLogo' => Image::class,
        'HeaderButtonLink' => SiteTree::class,
        'FooterLogo' => Image::class
    ];

    /**
     * Page ownership
     *
     * @var array
     */
    private static $owns = [
        'HeaderLogo',
        'HeaderButtonLink',
        'FooterLogo'
    ];

    /**
     * Create fields in the settings pane of the CMS
     *
     * @param FieldList $fields
     * @return void
     */
    public function updateCMSFields(FieldList $fields)
    {
        // Main Tab
        $fields->addFieldsToTab(
            'Root.Main',
            [
                TextField::create(
                    'PhoneNumber',
                    'Phone Number'
                ), TextField::create(
                    'Email',
                    'Email'
                ), TextField::create(
                    'Facebook',
                    'Facebook'
                ), TextField::create(
                    'FacebookLink',
                    'Facebook Link'
                )->setDescription('Full link to facebook page required.')
            ]
        );

        // Header Tab
        $fields->addFieldsToTab(
            'Root.Header',
            [
                $headerLogo = UploadField::create(
                    'HeaderLogo',
                    'Header Logo'
                )->setDescription('Only supports <strong>jpg, jpeg, png</strong> filetypes.'),
                TextField::create(
                    'HeaderButtonText',
                    'Header Button Text'
                ), TreeDropdownField::create(
                    'HeaderButtonLinkID',
                    'Header Button Link',
                    SiteTree::class
                )
            ]
        );

        // Footer Tab
        $fields->addFieldsToTab(
            'Root.Footer',
            [
                TextField::create(
                    'FooterSentence1',
                    'Footer Sentence 1'
                ), TextField::create(
                    'FooterSentence2',
                    'Footer Sentence 2'
                ), TextField::create(
                    'FooterSentence2Link',
                    'Footer Sentence 2 Link'
                ), $footerLogo = UploadField::create(
                    'FooterLogo',
                    'Footer Logo'
                )->setDescription('Only supports <strong>jpg, jpeg, png</strong> filetypes.')
            ]
        );

        $headerLogo->getValidator()->setAllowedExtensions(['jpg','jpeg','png']);
        $footerLogo->getValidator()->setAllowedExtensions(['jpg','jpeg','png']);

        // Alert Tab
        $fields->addFieldsToTab(
            'Root.Alert',
            [
                TextField::create(
                    'AlertTitle',
                    'Alert Title'
                ), TextareaField::create(
                    'AlertContent',
                    'Alert Content'
                )
            ]
        );
    }
}
