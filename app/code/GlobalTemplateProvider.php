<?php

use SilverStripe\View\TemplateGlobalProvider;
use SilverStripe\Control\Director;

class GlobalTemplateProvider implements TemplateGlobalProvider
{
    /**
     * Provides a global $IsDev variable to be used in templates
     *
     * @return array
     */
    public static function get_template_global_variables()
    {
        return [
            'IsDev' => 'isDev',
        ];
    }

    /**
     * Checks whether we're in dev mode or not.
     *
     * @return boolean
     */
    public static function isDev()
    {
        return Director::isDev();
    }
}

