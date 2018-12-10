<?php

namespace App\PageType;

use Page;

class NewsPage extends Page
{
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
