<?php

namespace App\PageType;

use Page;
use SilverStripe\Forms\TextareaField;

class ContentPage extends Page
{
    /**
     * Page description in CMS
     *
     * @var string
     */
    private static $description = "Content page";

    /**
     * Page database name
     *
     * @var string
     */
    private static $table_name = "ContentPage";

    /**
     * Page database
     *
     * @var array
     */
    private static $db = [
        'Summary' => 'Text'
    ];

    /**
     * Create fields in the page settings of the CMS
     *
     * @return void
     */
    public function getCMSFields()
    {
        $fields = parent::getCMSFields();
        $fields->addFieldToTab('Root.Main', TextareaField::create(
            'Summary'
        ), 'Content');
        return $fields;
    }
}
