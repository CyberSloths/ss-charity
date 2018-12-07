<?php

use SilverStripe\Assets\Image;
use SilverStripe\CMS\Model\SiteTree;
use SilverStripe\Forms\CheckboxField;
use SilverStripe\Forms\TextareaField;
use SilverStripe\AssetAdmin\Forms\UploadField;
use SilverStripe\Forms\CompositeField;

class Page extends SiteTree
{
    /**
     * Page database
     *
     * @var array
     */
    private static $db = [
        'Summary' => 'Text',
        'IsDisplayed' => 'Boolean'
    ];

    /**
     * Page relationship of 1 of each items
     *
     * @var array
     */
    private static $has_one = [
        'FeatureImage' => Image::class,
    ];

    /**
     * Determine ownership of asset to page in order to display
     *
     * @var array
     */
    private static $owns = [
        'FeatureImage',
    ];

    /**
     * Create fields in the page settings of the CMS
     *
     * @return void
     */
    public function getCMSFields()
    {
        $fields = parent::getCMSFields();
        $fields->addFieldsToTab(
            'Root.Main',
            [
                TextareaField::create(
                    'Summary'
                ),
                CompositeField::create(
                    $featureImage = UploadField::create(
                        'FeatureImage',
                        'Feature image'
                    )->setDescription(
                        'Only supports <strong>jpg, jpeg, png</strong> filetypes.
                        </br>Recommended dimensions 1920 x 1080 px.'
                    ),
                    CheckboxField::create(
                        'IsDisplayed',
                        'Show feature image on page'
                    )
                )->setName('PageFeature')
            ],
            'Content'
        );

        // Image upload validations
        $featureImage->getValidator()->setAllowedExtensions(['jpg','jpeg','png']);

        return $fields;
    }
}
