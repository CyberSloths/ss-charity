<?php

namespace App\Pagetype;

use Page;
use SilverStripe\Forms\TextField;
use SilverStripe\Assets\Image;
use SilverStripe\AssetAdmin\Forms\UploadField;

class HomePage extends Page
{
    private static $db = [
      'BannerText' => 'Varchar',
    ];

    private static $has_one = [
        'BannerImage' => Image::class,
    ];

    private static $owns = [
        'BannerImage',
    ];

    public function getCMSFields()
    {
        $fields = parent::getCMSFields();

        $fields->addFieldToTab('Root.Banner', TextField::create(
            'BannerText',

            'Banner text'
        ));


        $fields->addFieldToTab('Root.Banner', $bannerImage = UploadField::create(
            'BannerImage',

            'Banner image'
        ));

        $bannerImage->getValidator()->setAllowedExtensions(['jpg','jpeg','png']);

        return $fields;
    }
}
