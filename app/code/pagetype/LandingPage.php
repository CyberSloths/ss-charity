<?php

namespace App\PageType;

use Page;

class LandingPage extends Page
{
    /**
     * Page description in CMS
     *
     * @var string
     */
    private static $description = "Landing page";

    /**
     * Database name
     *
     * @var string
     */
    private static $table_name = "LandingPage";

    /**
     * Page database
     *
     * @var array
     */
    private static $db = [
        'Summary' => 'Text',
    ];

    /**
     * Create fields in the page settings of the CMS
     *
     * @return void
     */
    public function getCMSFields()
    {
        $fields = parent::getCMSFields();

        // Field reductions
        $fields->removeByName('PageFeature');
        $fields->removeFieldFromTab(
            'Root.Main',
            'Content'
        );

        return $fields;
    }
}
