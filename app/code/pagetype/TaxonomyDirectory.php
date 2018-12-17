<?php

namespace App\PageType;

use Page;
use App\PageType\NewsPage;
use SilverStripe\CMS\Model\SiteTree;
use SilverStripe\Taxonomy\TaxonomyTerm;
use App\Controller\CustomTaxonomyDirectoryController;

class TaxonomyDirectory extends Page
{
    /**
     * Default children of the Taxonomy Directory
     *
     * @var string
     */
    private static $default_child = NewsPage::class;

    /**
     * Children allowed
     *
     * @var array
     */
    private static $allowed_children = [
        NewsPage::class,
    ];

    /**
     * Page description in CMS
     *
     * @var string
     */
    private static $description = 'Page for listing news';

    /**
     * Set controller for the page to use
     *
     * @return void
     */
    public function getControllerName()
    {
        return CustomTaxonomyDirectoryController::class;
    }
}
