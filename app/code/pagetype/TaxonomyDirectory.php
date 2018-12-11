<?php

namespace App\PageType;

use Page;
use SilverStripe\CMS\Model\SiteTree;
use SilverStripe\Taxonomy\TaxonomyTerm;
use App\Controller\CustomTaxonomyDirectoryController;
use SilverStripe\GraphQL\Controller;


class TaxonomyDirectory extends Page
{
    public function stageChildren($showAll = false)
    {

        $termIDs = TaxonomyTerm::get()->getIDList();

        return Page::get()
            ->exclude('ID', $this->ID)
            ->filter(['Terms.ID' => $termIDs]);
    }

    public function liveChildren($showAll = false, $onlyDeletedFromStage = false)
    {
        return $this->stageChildren($showAll);
    }

    public function getControllerName()
    {
        return CustomTaxonomyDirectoryController::class;
    }
}
