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
    ];

    /**
     * This page has one banner image
     *
     * @var array
     */
    private static $has_one = [
        'BannerImage' => Image::class,
    ];

    /**
     * Determine ownership of asset to page in order to display
     *
     * @var array
     */
    private static $owns = [
        'BannerImage',
    ];

    /**
     * Create fields in the settings CMS
     *
     * @return void
     */
    public function getCMSFields()
    {
        $fields = parent::getCMSFields();

        $fields->addFieldToTab('Root.Banner', TextField::create(
            'BannerText',
            'Banner text'
        ));


        $fields->addFieldToTab('Root.Banner', $bannerImage = UploadField::create(
            'BannerImage',
            'Banner image'
        ));

        $bannerImage->getValidator()->setAllowedExtensions(['jpg','jpeg','png']);

        return $fields;
    }
}
