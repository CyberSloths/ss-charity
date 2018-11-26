<?php

namespace App\Model;

use App\Block\StaffBlock;
use SilverStripe\Assets\Image;
use SilverStripe\ORM\DataObject;
use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\TextField;
use SilverStripe\Forms\TextareaField;
use SilverStripe\AssetAdmin\Forms\UploadField;
use SilverStripe\Control\Director;

class StaffProfile extends DataObject
{
    private static $table_name = 'StaffProfile';

    private static $db = [
        'StaffName' => 'Varchar(50)',
        'StaffDesc' => 'Text',
        'SortOrder' => 'Int'
    ];

    private static $has_one = [
        'StaffPhoto' => Image::class,
        'StaffBlock' => StaffBlock::class
    ];

    private static $owns = [
        'StaffPhoto'
    ];

    private static $default_sort = [
        'SortOrder' => 'ASC'
    ];

    private static $summary_fields = [
        'StaffPhoto.CMSThumbnail' => 'Thumbnail',
        'StaffName',
        'StaffDesc'
    ];

    public function Link()
    {
        return Director::absoluteBaseURL().'profile/showProfile/'.$this->ID;
    }

    public function getCMSFields()
    {
        $fields = FieldList::create(
            TextField::create('StaffName', 'Staff Name')
                ->setDescription('Enter staff name'),
            $banner_img = UploadField::create('StaffPhoto', 'Staff Photo'),
            TextareaField::create('StaffDesc', 'Staff Description')
        );
        $banner_img->getValidator()->setAllowedExtensions(['jpeg', 'jpg', 'gif', 'png']);

        return $fields;
    }
}
