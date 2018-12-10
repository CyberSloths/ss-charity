<?php

namespace App\PageType;

use Page;
use SilverStripe\Taxonomy\TaxonomyTerm;
use SilverStripe\Forms\TreeMultiselectField;

class NewsPage extends Page
{
    /**
     * Database name
     *
     * @var string
     */
    private static $table_name = "NewsPage";

    /**
     * Page description in CMS
     *
     * @var string
     */
    private static $description = "News page";

    /**
     * Page database
     *
     * @var array
     */
    private static $db = [
    ];

    /**
     * Page relationship of 1 of each items
     *
     * @var array
     */
    private static $has_one = [
    ];

    /**
     * Page relationship of many items
     *
     * @var array
     */
    private static $many_many = [
        'Terms' => TaxonomyTerm::class,
    ];

    /**
     * Determine ownership of asset to page in order to display
     *
     * @var array
     */
    private static $owns = [
        'Terms'
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
                TreeMultiselectField::create(
                    'Terms',
                    'Tags',
                    TaxonomyTerm::class
                )
            ],
            'Content'
        );

        return $fields;
    }

}
