<?php

namespace App\Controller;

use Page;
use SilverStripe\View\ArrayData;
use SilverStripe\ORM\DataExtension;
use SilverStripe\CMS\Model\SiteTree;
use SilverStripe\GraphQL\Controller;
use SilverStripe\Control\HTTPRequest;
use SilverStripe\Taxonomy\TaxonomyTerm;
use SilverStripe\Taxonomy\Controllers\TaxonomyDirectoryController;

class CustomTaxonomyDirectoryController extends TaxonomyDirectoryController
{
    private static $allowed_actions = [
        'showTags'
    ];

    /**
     * This action allows for pages to be filtered by a desired term
     *
     * @param HTTPRequest $request
     * @return void
     */
    public function showTags(HTTPRequest $request)
    {
        $termString = $request->param('ID');

        // Used to handle empty ID requests
        $title = TaxonomyTerm::get()->byID($termString) ? TaxonomyTerm::get()->byID($termString)->Name : '';

        $pages = Page::get()->filter(['Terms.Name' => $title]);

        return $this->customise(
            new ArrayData(
                [
                    'Title' => $title,
                    'Term' => $termString,
                    'Pages' => $pages,
                    'Breadcrumbs' => $this->renderBreadcrumb($termString)
                ]
            )
        )->renderWith([__CLASS__, "Page"]);
    }

    /**
     * Create URL which action will be performed on
     *
     * @param [type] $action
     * @return void
     */
    public function Link($action = null)
    {
        $link = Controller::join_links('news-and-events/', $action);
    }
}
