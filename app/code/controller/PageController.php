<?php

use App\Search\SSCharityIndex;
use SilverStripe\CMS\Search\SearchForm;
use SilverStripe\CMS\Controllers\ContentController;
use SilverStripe\FullTextSearch\Search\Queries\SearchQuery;
use SilverStripe\Control\HTTPRequest;

class PageController extends ContentController
{
    /**
     * An array of actions that can be accessed via a request. Each array element should be an action name, and the
     * permissions or conditions required to allow the user to access it.
     *
     * <code>
     * array (
     *     'action', // anyone can access this action
     *     'action' => true, // same as above
     *     'action' => 'ADMIN', // you must have ADMIN permissions to access this action
     *     'action' => '->checkAction' // you can only access this action if $this->checkAction() returns true
     * );
     * </code>
     *
     * @var array
     */
    private static $allowed_actions = [
        'searchForm'
    ];

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
        // You can include any CSS or JS required by your project here.
        // See: http://doc.silverstripe.org/framework/en/reference/requirements
    }

    /**
     * Site search form
     *
     * @param HTTPRequest $request The request for search form
     *
     * @return searchForm
     */
    public function searchForm(HTTPRequest $request)
    {
        $query = SearchQuery::create()->addSearchTerm($request->getVar('q'));
        $query->setStart($request->getVar('start'));
        $solrResult = SSCharityIndex::singleton()->search($query);

        return $this->customise(
            [
                'Query' => $request->getVar('q'),
                'SearchResult' => $solrResult,
                'SearchPageTitle' => "Search Results"
            ]
        )->renderWith(['ResultsPage', 'Page']);
    }
}
