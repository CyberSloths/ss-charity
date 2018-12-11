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

    public function showTags(HTTPRequest $request)
    {
        $termString = $request->param('ID');

        $title = TaxonomyTerm::get()->byID($termString) ? TaxonomyTerm::get()->byID($termString)->Name : '';
        $pages = Page::get()->filter(['Terms.Name' => $title]);

        return $this->customise(new ArrayData(array(
            'Title' => $title,
            'Term' => $termString,
            'Pages' => $pages,
            'Breadcrumbs' => $this->renderBreadcrumb($termString)
        )))->renderWith(array(__CLASS__, "Page"));

        var_dump($title);
        die;
    }

    public function Link($action = null)
    {
        $link = Controller::join_links('news-and-events/', $action);
    }
}
