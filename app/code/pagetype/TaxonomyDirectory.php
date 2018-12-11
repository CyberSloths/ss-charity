<?php

namespace App\PageType;

use Page;
use SilverStripe\CMS\Model\SiteTree;
use SilverStripe\Taxonomy\TaxonomyTerm;
use App\Controller\CustomTaxonomyDirectoryController;
use SilverStripe\GraphQL\Controller;

class TaxonomyDirectory extends Page
{
    /**
     * Page description in CMS
     *
     * @var string
     */
    private static $description = 'Page for listing news';

    /**
     * Stage children for the listing page based of terms
     *
     * @param boolean $showAll
     * @return void
     */
    public function stageChildren($showAll = false)
    {

        $termIDs = TaxonomyTerm::get()->getIDList();

        return Page::get()
            ->exclude('ID', $this->ID)
            ->filter(['Terms.ID' => $termIDs]);
    }

    /**
     * Pass all children of the listing page to stage step
     *
     * @param boolean $showAll
     * @param boolean $onlyDeletedFromStage
     * @return void
     */
    public function liveChildren($showAll = false, $onlyDeletedFromStage = false)
    {
        return $this->stageChildren($showAll);
    }

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
