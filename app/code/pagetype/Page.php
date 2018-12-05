<?php

use SilverStripe\CMS\Model\SiteTree;
use SilverStripe\Forms\TextareaField;

class Page extends SiteTree
{
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
        $fields->addFieldToTab(
            'Root.Main',
            TextareaField::create(
                'Summary'
            ),
            'Content'
        );
        return $fields;
    }
}
