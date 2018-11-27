<?php

namespace App\Search;

use SilverStripe\FullTextSearch\Solr\SolrIndex;
use SilverStripe\CMS\Model\SiteTree;

class SSCharityIndex extends SolrIndex
{
    public function init()
    {
        $this->addClass(SiteTree::class);
        $this->addFulltextField('Title');
        $this->addFulltextField('Content');
    }
}
