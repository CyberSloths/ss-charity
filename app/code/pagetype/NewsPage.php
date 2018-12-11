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

    /**
     * Page database
     *
     * @var array
     */
    private static $db = [
    ];

    /**
     * Page relationship of 1 of each items
     *
     * @var array
     */
    private static $has_one = [
    ];

    /**
     * Determine ownership of asset to page in order to display
     *
     * @var array
     */
    private static $owns = [
    ];

}
