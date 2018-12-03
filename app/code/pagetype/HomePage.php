<?php

namespace App\PageType;

use Page;
use SilverStripe\Forms\TextField;
use SilverStripe\Assets\Image;
use SilverStripe\AssetAdmin\Forms\UploadField;

class HomePage extends Page
{

    /**
     * Page description in CMS
     *
     * @var string
     */
    private static $description = "Home page";

    /**
     * Page database
     *
     * @var array
     */
    private static $db = [
      'BannerText' => 'Varchar',
      'AccomTextHead' => 'Varchar',
      'AccomTextDesc1' => 'Varchar',
      'AccomTextDesc2' => 'Varchar',
      'AccomTextDesc3' => 'Varchar',
    ];

    /**
     * This page has one banner image
     *
     * @var array
     */
    private static $has_one = [
        'BannerImage' => Image::class,
        'Accom1' => Image::class,
        'Accom2' => Image::class,
        'Accom3' => Image::class,
    ];

    /**
     * Determine ownership of asset to page in order to display
     *
     * @var array
     */
    private static $owns = [
        'BannerImage',
        'Accom1',
        'Accom2',
        'Accom3'
    ];

    /**
     * Create fields in the settings CMS
     *
     * @return void
     */
    public function getCMSFields()
    {
        $fields = parent::getCMSFields();

        // Banner Tab
        $fields->addFieldToTab('Root.Banner', TextField::create(
            'BannerText',
            'Banner text'
        ));

        $fields->addFieldToTab('Root.Banner', $bannerImage = UploadField::create(
            'BannerImage',
            'Banner image'
        ));

        // Accomadation Tab
        $fields->addFieldToTab('Root.Accomadation', TextField::create(
            'AccomTextHead',
            'Section Header'
        ));

        $fields->addFieldToTab('Root.Accomadation', $accom1 = UploadField::create(
            'Accom1',
            'Step 1 image'
        ));

        $fields->addFieldToTab('Root.Accomadation', TextField::create(
            'AccomTextDesc1',
            'Step 1'
        ));

        $fields->addFieldToTab('Root.Accomadation', $accom2 = UploadField::create(
            'Accom2',
            'Step 2 image'
        ));

        $fields->addFieldToTab('Root.Accomadation', TextField::create(
            'AccomTextDesc2',
            'Step 2'
        ));

        $fields->addFieldToTab('Root.Accomadation', $accom3 = UploadField::create(
            'Accom3',
            'Step 3 image'
        ));

        $fields->addFieldToTab('Root.Accomadation', TextField::create(
            'AccomTextDesc3',
            'Step 3'
        ));


        // Image upload validations
        $bannerImage->getValidator()->setAllowedExtensions(['jpg','jpeg','png']);
        $accom1->getValidator()->setAllowedExtensions(['jpg','jpeg','png']);
        $accom2->getValidator()->setAllowedExtensions(['jpg','jpeg','png']);
        $accom3->getValidator()->setAllowedExtensions(['jpg','jpeg','png']);

        return $fields;
    }
}
