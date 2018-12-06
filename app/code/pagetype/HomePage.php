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
      'CallToActionHeading' => 'Varchar',
      'CallToActionDesc' => 'Varchar',
      'CallToActionButton' => 'Varchar'
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
        'CallToActionImage' => Image::class,
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
        'CallToActionImage'
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
        $fields->addFieldsToTab(
            'Root.Banner',
            [
                TextField::create(
                    'BannerHeading',
                    'Banner Heading'
                ),
                TextField::create(
                    'BannerDesc',
                    'Banner Description'
                ),
                $bannerImage = UploadField::create(
                    'BannerImage',
                    'Banner Image'
                )->setDescription('Only supports <strong>jpg, jpeg, png</strong> filetypes.</br>Recommended dimensions 1920 x 1080 px.')
            ]
        );

        // Accommodation configurations
        $fields->addFieldsToTab(
            'Root.Accomodation',
            [
                TextField::create(
                    'AccomHeading',
                    'Section Heading'
                ),
                TextField::create(
                    'AccomStep1',
                    'Stage 1'
                ),
                TreeDropdownField::create(
                    'Accom1LinkID',
                    'Stage 1 Link',
                    SiteTree::class
                ),
                TextField::create(
                    'AccomStep2',
                    'Stage 2'
                ),
                TreeDropdownField::create(
                    'Accom2LinkID',
                    'Stage 2 Link',
                    SiteTree::class
                ),
                TextField::create(
                    'AccomStep3',
                    'Stage 3'
                ),
                TreeDropdownField::create(
                    'Accom3LinkID',
                    'Stage 3 Link',
                    SiteTree::class
                )
            ]
        );

        // call-to-action configurations
        $fields->addFieldsToTab(
            'Root.CallToAction',
            [
                TextField::create(
                    'CallToActionHeading',
                    'Section Heading'
                ),

                TextField::create(
                    'CallToActionDesc',
                    'Section Subtext'
                ),

                $callToActionImage = UploadField::create(
                    'CallToActionImage',
                    'CallToActionImage'
                )->setDescription('Only supports <strong>jpg, jpeg, png</strong> filetypes.</br>Recommended dimensions 1920 x 1080 px.'),

                TextField::create(
                    'CallToActionButton',
                    'Button Text'
                ),
            ]
        );

        // Image upload validations
        $bannerImage->getValidator()->setAllowedExtensions(['jpg','jpeg','png']);
        $callToActionImage->getValidator()->setAllowedExtensions(['jpg','jpeg','png']);

        return $fields;
    }
}
