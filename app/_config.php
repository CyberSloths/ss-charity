<?php

use SilverStripe\Security\PasswordValidator;
use SilverStripe\Security\Member;

// remove PasswordValidator for SilverStripe 5.0
$validator = PasswordValidator::create();
$validator->setMinLength(8);
$validator->setHistoricCount(6);
Member::set_password_validator($validator);

# Enable Fulltextsearch
\SilverStripe\FullTextSearch\Solr\Solr::configure_server([
    'indexstore' => [
        'mode' => 'file',
        'path' => BASE_PATH . '/.solr'
    ]
]);
