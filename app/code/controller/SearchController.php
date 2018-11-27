<?php

namespace App\Controller;

use PageController;
use App\Search\SSCharityIndex;
use SilverStripe\Control\HTTPRequest;
use SilverStripe\FullTextSearch\Search\Queries\SearchQuery;

class SearchController extends PageController
{
    private static $allowed_actions = [
        'search'
    ];

    public function search(HTTPRequest $request)
    {
        $query = SearchQuery::create()->addSearchTerm($request->getVar('q'));

        return $this
            ->renderWith([
                'SearchResultPage' => SSCharityIndex::singleton()->search($query)
            ]);
    }
}
