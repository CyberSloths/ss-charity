<?php

namespace App\Extension;

use Page;
use SilverStripe\ORM\DataExtension;

class TaxonomyTermExtension extends DataExtension
{
    /**
     * Relationship to many
     *
     * @var array
     */
    private static $belongs_many_many = [
        'Pages' => Page::class,
    ];
}
