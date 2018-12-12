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
    /**
     * Allowed actions which can be accessed via request
     *
     * @var array
     */
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
        $termID = $request->param('ID');

        // Used to handle empty ID requests
        $title = TaxonomyTerm::get()->byID($termID) ? TaxonomyTerm::get()->byID($termID)->Name : '';

        $pages = Page::get()->filter(['Terms.ID' => $termID]);

        return $this->customise(
            new ArrayData(
                [
                    'Title' => $title,
                    'Term' => $termID,
                    'Pages' => $pages,
                    'Breadcrumbs' => $this->renderBreadcrumb($termID)
                ]
            )
        )->renderWith([__CLASS__, "Page"]);
    }

    /**
     * Create URL which action will be performed on
     *
     * @param string $action
     * @return void
     */
    public function Link($action = null)
    {
        $link = Controller::join_links('news-and-events/', $action);
    }
}
