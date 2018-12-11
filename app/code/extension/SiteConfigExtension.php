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
    ];

    /**
     * Page relationship of 1 of each items
     *
     * @var array
     */
    private static $has_one = [
        'HeaderLogo' => Image::class,
        'HeaderButtonLink' => SiteTree::class,
        'FooterLogo' => Image::class,
        'SponsorLogo1' => Image::class,
        'SponsorLogo2' => Image::class,
        'SponsorLogo3' => Image::class,
        'SponsorLogo4' => Image::class
    ];

    /**
     * Page ownership
     *
     * @var array
     */
    private static $owns = [
        'HeaderLogo',
        'HeaderButtonLink',
        'FooterLogo',
        'SponsorLogo1',
        'SponsorLogo2',
        'SponsorLogo3',
        'SponsorLogo4',
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
                )
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
                ), $footerLogo = UploadField::create(
                    'FooterLogo',
                    'Footer Logo'
                )->setDescription('Only supports <strong>jpg, jpeg, png</strong> filetypes.'),
                $sponsorLogo1 = UploadField::create(
                    'SponsorLogo1',
                    'Sponsor Logo 1'
                )->setDescription('Only supports <strong>jpg, jpeg, png</strong> filetypes.'),
                $sponsorLogo2 = UploadField::create(
                    'SponsorLogo2',
                    'Sponsor Logo 2'
                )->setDescription('Only supports <strong>jpg, jpeg, png</strong> filetypes.'),
                $sponsorLogo3 = UploadField::create(
                    'SponsorLogo3',
                    'Sponsor Logo 3'
                )->setDescription('Only supports <strong>jpg, jpeg, png</strong> filetypes.'),
                $sponsorLogo4 = UploadField::create(
                    'SponsorLogo4',
                    'Sponsor Logo 4'
                )->setDescription('Only supports <strong>jpg, jpeg, png</strong> filetypes.')
            ]
        );

        $headerLogo->getValidator()->setAllowedExtensions(['jpg','jpeg','png']);
        $footerLogo->getValidator()->setAllowedExtensions(['jpg','jpeg','png']);
        $sponsorLogo1->getValidator()->setAllowedExtensions(['jpg','jpeg','png']);
        $sponsorLogo2->getValidator()->setAllowedExtensions(['jpg','jpeg','png']);
        $sponsorLogo3->getValidator()->setAllowedExtensions(['jpg','jpeg','png']);
        $sponsorLogo4->getValidator()->setAllowedExtensions(['jpg','jpeg','png']);

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
