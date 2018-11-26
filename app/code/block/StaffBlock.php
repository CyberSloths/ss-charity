<?php

namespace App\Block;

use App\Model\StaffProfile;
use SilverStripe\Forms\FieldList;
use DNADesign\Elemental\Models\BaseElement;
use SilverStripe\Forms\GridField\GridField;
use Symbiote\GridFieldExtensions\GridFieldOrderableRows;
use SilverStripe\Forms\GridField\GridFieldConfig_RecordEditor;

class StaffBlock extends BaseElement
{
    private static $singular_name = 'Staff Block';
    private static $plural_name = 'Staff Blocks';
    private static $description = 'Content block for staff content.';

    private static $has_many = [
        'StaffProfiles' => StaffProfile::class
    ];

    public function getCMSFields()
    {
        $fields = FieldList::create(
            GridField::create(
                'StaffProfilesID',
                'Staff Profiles',
                $this->StaffProfiles(),
                GridFieldConfig_RecordEditor::create()
                    ->addComponent(GridFieldOrderableRows::create('SortOrder'))
            )
        );

        return $fields;
    }

    public function getType()
    {
        return 'StaffBlock';
    }
}
