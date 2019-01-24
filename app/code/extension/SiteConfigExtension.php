<?php

namespace App\Extension;

use SilverStripe\Assets\Image;
use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\TextField;
use SilverStripe\ORM\DataExtension;
use Sheadawson\Linkable\Models\Link;
use SilverStripe\Forms\TextareaField;
use Sheadawson\Linkable\Forms\LinkField;
use SilverStripe\AssetAdmin\Forms\UploadField;

class SiteConfigExtension extends DataExtension
{
    /**
     * Page database
     *
     * @var array
     */
    private static $db = [
        'FacebookTitle' => 'Varchar',
        'FacebookUser' => 'Varchar',
        'FooterSentence1' => 'Varchar',
        'FooterSentence2' => 'Varchar',
        'AlertTitle' => 'Varchar',
        'AlertContent' => 'Text',
        'FooterSentence2Link' => 'Varchar'
    ];

    /**
     * Page relationship of 1 of each items
     *
     * @var array
     */
    private static $has_one = [
        'PhoneNumber' => Link::class,
        'Email' => Link::class,
        'HeaderLogo' => Image::class,
        'HeaderButton' => Link::class,
        'FooterLogo' => Image::class
    ];

    /**
     * Page ownership
     *
     * @var array
     */
    private static $owns = [
        'HeaderLogo',
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
                $phoneNumber = LinkField::create(
                    'PhoneNumberID',
                    'Phone Number'
                ),
                $email = LinkField::create(
                    'EmailID',
                    'Email'
                ),
                TextField::create(
                    'FacebookTitle',
                    'Facebook Title'
                ),
                TextField::create(
                    'FacebookUser',
                    'Facebook UID or username'
                )->setDescription(
                    'Facebook link (everything after the "https://www.facebook.com/", '
                    .'e.g. https://www.facebook.com/username or https://www.facebook.com/pages/108510539573)'
                )
            ]
        );

        $phoneNumber->setAllowedTypes(['Phone']);
        $email->setAllowedTypes(['Email']);

        // Header Tab
        $fields->addFieldsToTab(
            'Root.Header',
            [
                $headerLogo = UploadField::create(
                    'HeaderLogo',
                    'Header Logo'
                )->setDescription('Only supports <strong>jpg, jpeg, png</strong> filetypes.'),
                $headerButton = LinkField::create(
                    'HeaderButtonID',
                    'Header Button'
                )
            ]
        );

        $headerLogo->getValidator()->setAllowedExtensions(['jpg','jpeg','png']);
        $headerButton->setAllowedTypes(['SiteTree']);

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
