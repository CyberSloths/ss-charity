<?php

namespace App\PageType;

use Page;
use SilverStripe\Assets\Image;
use SilverStripe\Forms\TextField;
use SilverStripe\CMS\Model\SiteTree;
use SilverStripe\Forms\TreeDropdownField;
use SilverStripe\AssetAdmin\Forms\UploadField;

class HomePage extends Page
{
    /**
     * Database name
     *
     * @var string
     */
    private static $table_name = "HomePage";

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
      'AccomHeading' => 'Varchar',
      'AccomStep1' => 'Varchar',
      'AccomStep2' => 'Varchar',
      'AccomStep3' => 'Varchar',
    ];

    /**
     * Page relationship of 1 of each items
     *
     * @var array
     */
    private static $has_one = [
        'BannerImage' => Image::class,
        'Accom1Link' => SiteTree::class,
        'Accom2Link' => SiteTree::class,
        'Accom3Link' => SiteTree::class,
    ];

    /**
     * Determine ownership of asset to page in order to display
     *
     * @var array
     */
    private static $owns = [
        'BannerImage',
        'Accom1Link',
        'Accom2Link',
        'Accom3Link',
    ];

    /**
     * Create fields in the page settings of the CMS
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

        // Accomodaiton configurations
        $fields->addFieldToTab('Root.Accomodation', TextField::create(
            'AccomHeading',
            'Section Heading'
        ));

        $fields->addFieldToTab('Root.Accomodation', TextField::create(
            'Accom1',
            'Stage 1'
        ));

        $fields->addFieldToTab('Root.Accomodation', TreeDropdownField::create(
            'Accom1Link',
            'Stage 1 Link',
            SiteTree::class
        ));

        $fields->addFieldToTab('Root.Accomodation', TextField::create(
            'Accom2',
            'Stage 2'
        ));

        $fields->addFieldToTab('Root.Accomodation', TreeDropdownField::create(
            'Accom2Link',
            'Stage 2 Link',
            SiteTree::class
        ));

        $fields->addFieldToTab('Root.Accomodation', TextField::create(
            'Accom3',
            'Stage 3'
        ));

        $fields->addFieldToTab('Root.Accomodation', TreeDropdownField::create(
            'Accom3Link',
            'Stage 3 Link',
            SiteTree::class
        ));

        // Image upload validations
        $bannerImage->getValidator()->setAllowedExtensions(['jpg','jpeg','png']);

        return $fields;
    }
}
