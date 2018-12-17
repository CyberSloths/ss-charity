<?php

namespace App\PageType;

use Page;
use App\PageType\TaxonomyDirectory;

class NewsPage extends Page
{
    /**
     * Page description in CMS
     *
     * @var string
     */
    private static $description = "News page";

    /**
     * Default Parent
     *
     * @var string
     */
    private static $default_parent = TaxonomyDirectory::class;
}
