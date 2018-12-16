<?php

namespace App\Controller;

use Page;
use SilverStripe\ORM\ArrayList;
use SilverStripe\View\ArrayData;
use App\PageType\TaxonomyDirectory;
use SilverStripe\ORM\DataExtension;
use SilverStripe\ORM\PaginatedList;
use SilverStripe\CMS\Model\SiteTree;
use SilverStripe\GraphQL\Controller;
use SilverStripe\Control\HTTPRequest;
use SilverStripe\Taxonomy\TaxonomyTerm;
use SilverStripe\Taxonomy\Controllers\TaxonomyDirectoryController;
use App\PageType\NewsPage;
use SilverStripe\ORM\DataObject;

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
     * Filtered pages
     *
     * @var array
     */
    private $pages;

    /**
     * Initialise pages list
     *
     * @return void
     */
    protected function init()
    {
        parent::init();
        $this->pages = ArrayList::create();
    }

    /**
     * Overriding original index function from vendor class
     *
     * @param HTTPRequest $request
     * @return void
     */
    public function index(HTTPRequest $request)
    {
        $termString = $request->param('ID');

        $this->pages = NewsPage::get();
        $terms = TaxonomyTerm::get()->filter(['Name:StartsWith:not' => '2']);
        $dates = TaxonomyTerm::get()->filter(['Name:StartsWith' => '2']);

        return $this->customise(
            new ArrayData(
                [
                    'Title' => $termString,
                    'Term' => $termString,
                    'Pages' => $this->pages,
                    'Terms' => $terms,
                    'Dates' => $dates,
                    'Breadcrumbs' => $this->renderBreadcrumb($termString)
                ]
            )
        )->renderWith([static::class, Page::class]);
    }

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

        $this->pages = Page::get()->filter(['Terms.ID' => $termID]);
        $terms = TaxonomyTerm::get()->filter(['Name:StartsWith:not' => '2']);
        $dates = TaxonomyTerm::get()->filter(['Name:StartsWith' => '2']);

        return $this->customise(
            new ArrayData(
                [
                    'Title' => $title,
                    'Term' => $termID,
                    'Pages' => $this->pages,
                    'Terms' => $terms,
                    'Dates' => $dates,
                    'Breadcrumbs' => $this->renderBreadcrumb($termID)
                ]
            )
        )->renderWith([static::class, Page::class]);
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


    /**
    * Returns a paginated list of all pages in the site.
    */
    public function getPaginatedPages()
    {
        $filteredPages = new PaginatedList($this->pages, $this->getRequest());

        return $filteredPages;
    }

    /**
     * Returns page range string
     *
     * @param int $currentPage
     * @param int $totalItems
     * @return void
     */
    public function createPageRange($currentPage, $totalItems)
    {
        if ($currentPage != 1) {
            $currentDisplayRange = ($currentPage - 1)*10;
        } else {
            $currentDisplayRange = 1;
        }

        $endRange = $currentPage * 10;

        if ($totalItems - $endRange < 10 && $totalItems - $endRange < 0) {
            $endRange = $totalItems;
        }

        return (string) $currentDisplayRange.'-'.$endRange ;
    }

    /**
     * Title for all news listing pages
     *
     * @return void
     */
    public function getHeaderName()
    {
        $headerTitle = TaxonomyDirectory::get()->getHeaderName();

        return $headerTitle;
    }
}
