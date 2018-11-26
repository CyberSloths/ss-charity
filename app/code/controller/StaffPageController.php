<?php

namespace App\Controller;

use Page;
use PageController;
use App\Model\StaffProfile;
use SilverStripe\Control\HTTPRequest;

class StaffPageController extends PageController
{
    private static $allowed_actions = [
        'showProfile'
    ];

    public function showProfile(HTTPRequest $request)
    {
        $staffProfile = StaffProfile::get()->byID($request->param('ID'));
        $nextStaff = StaffProfile::get()->filter([
            'SortOrder:GreaterThan' => $staffProfile->SortOrder,
        ])->first();
        $prevStaff = StaffProfile::get()->filter([
            'SortOrder:LessThan' => $staffProfile->SortOrder,
        ])->last();

        if ($staffProfile) {
            return $this
                    ->customise([
                        'NextStaff' => $nextStaff,
                        'PrevStaff' => $prevStaff,
                        'CurrentStaff' => $staffProfile,
                        'StaffPhoto' => $staffProfile->StaffPhoto,
                        'StaffName' => $staffProfile->StaffName,
                        'StaffDesc' => $staffProfile->StaffDesc
                    ])
                    ->renderWith(['StaffProfilePage', Page::class]);
        } else {
            return $this->httpError(404, "Profile couldn't be found!");
        }
    }
}
