<?php

namespace App\Controller;

use Page;
use SilverStripe\ORM\ArrayList;
use SilverStripe\View\ArrayData;
use App\PageType\TaxonomyDirectory;
use SilverStripe\ORM\PaginatedList;
use SilverStripe\GraphQL\Controller;
use SilverStripe\Control\HTTPRequest;
use SilverStripe\Taxonomy\TaxonomyTerm;
use SilverStripe\Taxonomy\Controllers\TaxonomyDirectoryController;
use App\PageType\NewsPage;

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
     * Called during construction, this is the method that builds the structure.
     * Used instead of overriding __construct as we have specific execution order
     * - code that has to be run before _and/or_ after this.
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
     * @param HTTPRequest $request The action request
     *
     * @return void
     */
    public function index(HTTPRequest $request)
    {
        $termString = $request->param('ID');

        $this->pages = NewsPage::get();

        $terms = $this->getTerms();
        $dates = $this->getDates();
        $newsTitle = $this->getNewsTitle();

        return $this->customise(
            new ArrayData(
                [
                    'NewsTitle' => $newsTitle,
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
     * @param HTTPRequest $request The action request
     *
     * @return void
     */
    public function showTags(HTTPRequest $request)
    {
        $termID = $request->param('ID');

        // Used to handle empty ID requests
        $title = TaxonomyTerm::get()->byID($termID) ? TaxonomyTerm::get()->byID($termID)->Name : '';

        $this->pages = Page::get()->filter(['Terms.ID' => $termID]);
        $terms = $this->getTerms();
        $dates = $this->getDates();
        $newsTitle = $this->getNewsTitle();

        return $this->customise(
            new ArrayData(
                [
                    'NewsTitle' => $newsTitle,
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
     * @param string $action The action to be performed
     *
     * @return void
     */
    public function Link($action = null)
    {
        $link = Controller::join_links('news-and-events/', $action);
    }

    /**
     * Returns a paginated list of all pages in the site.
     *
     * @return PaginatedList
     */
    public function getPaginatedPages()
    {
        $filteredPages = new PaginatedList($this->pages, $this->getRequest());
        return $filteredPages;
    }

    /**
     * Filters terms from date terms
     *
     * @return array
     */
    public function getTerms()
    {
        $terms = TaxonomyTerm::get()->filter(['Name:StartsWith:not' => '2']);
        return $terms;
    }

    /**
     * Filters date terms from terms
     *
     * @return array
     */
    public function getDates()
    {
        $dates = TaxonomyTerm::get()->filter(['Name:StartsWith' => '2']);
        return $dates;
    }

    /**
     * Get page title of news listing page
     *
     * @return array
     */
    public function getNewsTitle()
    {
        $newsTitle = TaxonomyDirectory::get()->first()->Title;

        return $newsTitle;
    }
}
