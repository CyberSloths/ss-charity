<?php

namespace App\Search;

use SilverStripe\FullTextSearch\Solr\SolrIndex;
use SilverStripe\CMS\Model\SiteTree;

class SSCharityIndex extends SolrIndex
{
    /**
     * Called during construction, this is the method that builds the structure.
     * Used instead of overriding __construct as we have specific execution order
     * - code that has to be run before _and/or_ after this.
     *
     * @return void
     */
    public function init()
    {
        $this->addClass(SiteTree::class);
        $this->addFulltextField('Title');
        $this->addFulltextField('Content');
    }
}
