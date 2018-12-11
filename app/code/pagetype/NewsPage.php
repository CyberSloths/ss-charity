<?php

namespace App\PageType;

use Page;

class NewsPage extends Page
{
    /**
     * Database name
     *
     * @var string
     */
    private static $table_name = "NewsPage";

    /**
     * Page description in CMS
     *
     * @var string
     */
    private static $description = "News page";

}
