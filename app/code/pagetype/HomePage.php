<?php

namespace App\PageType;

use Page;
use SilverStripe\Assets\Image;
use SilverStripe\Forms\TextField;
use SilverStripe\CMS\Model\SiteTree;
use SilverStripe\Forms\TreeDropdownField;
use SilverStripe\AssetAdmin\Forms\UploadField;
use SilverStripe\Forms\TextareaField;

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
      'CallToActionButton' => 'Varchar',
      'ImportantTextHeader1' => 'Varchar',
      'ImportantTextDesc1' => 'Text',
      'ImportantTextHeader2' => 'Varchar',
      'ImportantTextDesc2' => 'Text',
      'ImportantTextHeader3' => 'Varchar',
      'ImportantTextDesc3' => 'Text',
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
        'CallToActionLink' => SiteTree::class,
        'Important1Link' => SiteTree::class,
        'Important2Link' => SiteTree::class,
        'Important3Link' => SiteTree::class,
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
        'CallToActionImage',
        'CallToActionLink',
        'Important1Link',
        'Important2Link',
        'Important3Link'
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
                    'Call to action Image'
                )->setDescription('Only supports <strong>jpg, jpeg, png</strong> filetypes.</br>Recommended dimensions 1920 x 1080 px.'),
                TextField::create(
                    'CallToActionButton',
                    'Button Text'
                ),
                TreeDropdownField::create(
                    'CallToActionLinkID',
                    'Button Link',
                    SiteTree::class
                )
            ]
        );

        // call-to-action configurations
        $fields->addFieldsToTab(
            'Root.ImportantItems',
            [
                TextField::create(
                    'ImportantTextHeader1',
                    'Heading One'
                ),
                TreeDropdownField::create(
                    'Important1LinkID',
                    'Link 1',
                    SiteTree::class
                )->setDescription('This link will be applied to Header One'),
                TextareaField::create(
                    'ImportantTextDesc1',
                    'Descripton One'
                ),
                TextField::create(
                    'ImportantTextHeader2',
                    'Heading Two'
                ),
                TreeDropdownField::create(
                    'Important2LinkID',
                    'Button Link',
                    SiteTree::class
                )->setDescription('This link will be applied to Header Two'),
                TextareaField::create(
                    'ImportantTextDesc2',
                    'Descripton Two'
                ),
                TextField::create(
                    'ImportantTextHeader3',
                    'Heading Three'
                ),
                TreeDropdownField::create(
                    'Important3LinkID',
                    'Link1',
                    SiteTree::class
                )->setDescription('This link will be applied to Header Three'),
                TextareaField::create(
                    'ImportantTextDesc3',
                    'Descripton Three'
                ),
            ]
        );

        // Image upload validations
        $bannerImage->getValidator()->setAllowedExtensions(['jpg','jpeg','png']);
        $callToActionImage->getValidator()->setAllowedExtensions(['jpg','jpeg','png']);

        return $fields;
    }
}
