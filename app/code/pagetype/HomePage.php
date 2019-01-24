<?php

namespace App\PageType;

use Page;
use SilverStripe\Assets\Image;
use SilverStripe\Forms\TextField;
use Sheadawson\Linkable\Models\Link;
use SilverStripe\Forms\TextareaField;
use SilverStripe\AssetAdmin\Forms\UploadField;
use Sheadawson\Linkable\Forms\LinkField;

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
      'CallToActionHeading' => 'Varchar',
      'CallToActionDesc' => 'Varchar',
      'ImportantDesc1' => 'Text',
      'ImportantDesc2' => 'Text',
      'ImportantDesc3' => 'Text',
    ];

    /**
     * Page relationship of 1 of each items
     *
     * @var array
     */
    private static $has_one = [
        'BannerImage' => Image::class,
        'Accommodation1' => Link::class,
        'Accommodation2' => Link::class,
        'Accommodation3' => Link::class,
        'CallToActionImage' => Image::class,
        'CallToActionButton' => Link::class,
        'ImportantHeader1' => Link::class,
        'ImportantHeader2' => Link::class,
        'ImportantHeader3' => Link::class,
        'PartnerLogo1' => Image::class,
        'PartnerLogo2' => Image::class,
        'PartnerLogo3' => Image::class,
        'PartnerLogo4' => Image::class
    ];

    /**
     * Determine ownership of asset to page in order to display
     *
     * @var array
     */
    private static $owns = [
        'BannerImage',
        'CallToActionImage',
        'PartnerLogo1',
        'PartnerLogo2',
        'PartnerLogo3',
        'PartnerLogo4'
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

        $bannerImage->getValidator()->setAllowedExtensions(['jpg','jpeg','png']);

        // Accommodation configurations
        $fields->addFieldsToTab(
            'Root.Accommodation',
            [
                TextField::create(
                    'AccomHeading',
                    'Section Heading'
                ),
                $accommodation1 = LinkField::create(
                    'Accommodation1ID',
                    'Stage 1'
                ),
                $accommodation2 = LinkField::create(
                    'Accommodation2ID',
                    'Stage 2'
                ),
                $accommodation3 = LinkField::create(
                    'Accommodation3ID',
                    'Stage 3'
                )
            ]
        );

        $accommodation1->setAllowedTypes(['SiteTree']);
        $accommodation2->setAllowedTypes(['SiteTree']);
        $accommodation3->setAllowedTypes(['SiteTree']);

        // Call-to-action configurations
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
                )->setDescription('This text disappears on mobile screens that are below 768px.'),
                $callToActionImage = UploadField::create(
                    'CallToActionImage',
                    'Call to Action Image'
                )->setDescription('Only supports <strong>jpg, jpeg, png</strong> filetypes.</br>Recommended dimensions 1920 x 1080 px.'),
                $callToActionButton = LinkField::create(
                    'CallToActionButtonID',
                    'Call to Action Button'
                )
            ]
        );

        $callToActionImage->getValidator()->setAllowedExtensions(['jpg','jpeg','png']);
        $callToActionButton->setAllowedTypes(['SiteTree']);

        // Important items configurations
        $fields->addFieldsToTab(
            'Root.ImportantItems',
            [
                $importantHeader1 = LinkField::create(
                    'ImportantHeader1ID',
                    'Heading One'
                ),
                TextareaField::create(
                    'ImportantDesc1',
                    'Description One'
                ),
                $importantHeader2 = LinkField::create(
                    'ImportantHeader2ID',
                    'Heading Two'
                ),
                TextareaField::create(
                    'ImportantDesc2',
                    'Description Two'
                ),
                $importantHeader3 = LinkField::create(
                    'ImportantHeader3ID',
                    'Heading Three'
                ),
                TextareaField::create(
                    'ImportantDesc3',
                    'Description Three'
                ),
            ]
        );

        $importantHeader1->setAllowedTypes(['SiteTree']);
        $importantHeader2->setAllowedTypes(['SiteTree']);
        $importantHeader3->setAllowedTypes(['SiteTree']);

        $fields->addFieldsToTab(
            'Root.Partners',
            [
                $partnerLogo1 = UploadField::create(
                    'PartnerLogo1',
                    'Partner Logo 1'
                )->setDescription('Only supports <strong>jpg, jpeg, png</strong> filetypes.'),
                $partnerLogo2 = UploadField::create(
                    'PartnerLogo2',
                    'Partner Logo 2'
                )->setDescription('Only supports <strong>jpg, jpeg, png</strong> filetypes.'),
                $partnerLogo3 = UploadField::create(
                    'PartnerLogo3',
                    'Partner Logo 3'
                )->setDescription('Only supports <strong>jpg, jpeg, png</strong> filetypes.'),
                $partnerLogo4 = UploadField::create(
                    'PartnerLogo4',
                    'Partner Logo 4'
                )->setDescription('Only supports <strong>jpg, jpeg, png</strong> filetypes.')
            ]
        );

        $partnerLogo1->getValidator()->setAllowedExtensions(['jpg','jpeg','png']);
        $partnerLogo2->getValidator()->setAllowedExtensions(['jpg','jpeg','png']);
        $partnerLogo3->getValidator()->setAllowedExtensions(['jpg','jpeg','png']);
        $partnerLogo4->getValidator()->setAllowedExtensions(['jpg','jpeg','png']);

        // Field reductions
        $fields->removeFieldFromTab(
            'Root.Main',
            'Summary'
        );

        $fields->removeFieldFromTab(
            'Root.Main',
            'Terms'
        );

        $fields->removeFieldFromTab(
            'Root.Main',
            'Content'
        );

        $fields->removeByName('PageFeature');

        return $fields;
    }
}
