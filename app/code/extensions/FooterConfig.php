<?php

namespace App\extensions;

use SilverStripe\Assets\Image;
use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\TextField;
use SilverStripe\ORM\DataExtension;
use SilverStripe\Forms\NumericField;
use SilverStripe\AssetAdmin\Forms\UploadField;
use SilverStripe\Forms\HTMLEditor\HTMLEditorField;

class FooterConfig extends DataExtension
{

    private static $db = [
        'PhoneNumber' => 'Varchar',
        'Email' => 'Varchar',
        'Facebook' => 'Varchar',
        'FooterSentence1' => 'Varchar',
        'FooterSentence2' => 'Varchar',
    ];

    private static $has_one = [
        'FooterLogo' => Image::class,
        'SponsorLogo1' => Image::class,
        'SponsorLogo2' => Image::class,
        'SponsorLogo3' => Image::class,
        'SponsorLogo4' => Image::class,
        'SponsorLogo5' => Image::class,
        'SponsorLogo6' => Image::class,
    ];

    private static $owns = [
        'FooterLogo',
        'SponsorLogo1',
        'SponsorLogo2',
        'SponsorLogo3',
        'SponsorLogo4',
        'SponsorLogo5',
        'SponsorLogo6'
    ];

    /**
     * Create fields in the settings pane of the CMS
     *
     * @param FieldList $fields
     * @return void
     */
    public function updateCMSFields(FieldList $fields)
    {
        $fields->addFieldToTab('Root.Main', TextField::create(
            'PhoneNumber',
            'Phone Number'
        ));

        $fields->addFieldToTab('Root.Main', TextField::create(
            'Email',
            'Email'
        ));

        $fields->addFieldToTab('Root.Main', TextField::create(
            'Facebook',
            'Facebook'
        ));

        $fields->addFieldToTab('Root.Main', TextField::create(
            'FooterSentence1',
            'Footer Sentence 1'
        ));

        $fields->addFieldToTab('Root.Main', TextField::create(
            'FooterSentence2',
            'Footer Sentence 2'
        ));

        $fields->addFieldToTab('Root.Main', $footerLogo = UploadField::create(
            'FooterLogo',
            'Footer Logo'
        ));

        $fields->addFieldToTab('Root.Main', $sponsorLogo1 = UploadField::create(
            'SponsorLogo1',
            'Sponsor Logo 1'
        ));

        $fields->addFieldToTab('Root.Main', $sponsorLogo2 = UploadField::create(
            'SponsorLogo2',
            'Sponsor Logo 2'
        ));

        $fields->addFieldToTab('Root.Main', $sponsorLogo3 = UploadField::create(
            'SponsorLogo3',
            'Sponsor Logo 3'
        ));

        $fields->addFieldToTab('Root.Main', $sponsorLogo4 = UploadField::create(
            'SponsorLogo4',
            'Sponsor Logo 4'
        ));

        $fields->addFieldToTab('Root.Main', $sponsorLogo5 = UploadField::create(
            'SponsorLogo5',
            'Sponsor Logo 5'
        ));

        $fields->addFieldToTab('Root.Main', $sponsorLogo6 = UploadField::create(
            'SponsorLogo6',
            'Sponsor Logo 6'
        ));

        $footerLogo->getValidator()->setAllowedExtensions(['jpg','jpeg','png']);
        $sponsorLogo1->getValidator()->setAllowedExtensions(['jpg','jpeg','png']);
        $sponsorLogo2->getValidator()->setAllowedExtensions(['jpg','jpeg','png']);
        $sponsorLogo3->getValidator()->setAllowedExtensions(['jpg','jpeg','png']);
        $sponsorLogo4->getValidator()->setAllowedExtensions(['jpg','jpeg','png']);
        $sponsorLogo5->getValidator()->setAllowedExtensions(['jpg','jpeg','png']);
        $sponsorLogo6->getValidator()->setAllowedExtensions(['jpg','jpeg','png']);
    }
}
