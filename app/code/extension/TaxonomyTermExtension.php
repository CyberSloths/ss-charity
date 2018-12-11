<?php

namespace App\Extension;

use Page;
use SilverStripe\ORM\DataExtension;

class TaxonomyTermExtension extends DataExtension
{
    private static $belongs_many_many = array(
        'Pages' => Page::class,
    );
}
