<?php

namespace App\PageType;

use Page;
use SilverStripe\Forms\TextField;
use SilverStripe\Assets\Image;
use SilverStripe\AssetAdmin\Forms\UploadField;

class HomePage extends Page
{
    /**
     * Database name
     *
     * @var string
     */
    private static $table_name = "Home page";

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
      'BannerHeading' => 'Varchar',
      'BannerDesc' => 'Varchar',
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

        // Banner Tab
        $fields->addFieldToTab('Root.Banner', TextField::create(
            'BannerHeading',
            'Banner Heading'
        ));

        $fields->addFieldToTab('Root.Banner', TextField::create(
            'BannerDesc',
            'Banner Description'
        ));

        $fields->addFieldToTab('Root.Banner', $bannerImage = UploadField::create(
            'BannerImage',
            'Banner Image'
        )->setDescription('Only supports <strong>jpg, jpeg, png</strong> filetypes.</br>Recommended dimensions 1920 x 1080 px.'));

        // Image upload validations
        $bannerImage->getValidator()->setAllowedExtensions(['jpg','jpeg','png']);

        return $fields;
    }
}
