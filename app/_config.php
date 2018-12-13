<?php

use SilverStripe\Security\Member;
use SilverStripe\Core\Environment;
use SilverStripe\FullTextSearch\Solr\Solr;
use SilverStripe\Security\PasswordValidator;

// remove PasswordValidator for SilverStripe 5.0
$validator = PasswordValidator::create();
$validator->setMinLength(8);
$validator->setHistoricCount(6);
Member::set_password_validator($validator);

// Enable Fulltextsearch
Solr::configure_server(
    [
        'host' => Environment::getEnv('SOLR_SERVER') ? : 'localhost',
        'port' => Environment::getEnv('SOLR_PORT') ? : '8983',
        'path' => Environment::getEnv('SOLR_PATH') ? : '/solr',
        'indexstore' => [
            'mode' => Environment::getEnv('SOLR_MODE') ? : 'file',
            'auth' => Environment::getEnv('SOLR_AUTH') ? : null,
            'path' => Environment::getEnv('SOLR_INDEXSTORE_PATH') ? : BASE_PATH.'/.solr',
            'remotepath' => Environment::getEnv('SOLR_REMOTE_PATH') ? : null,
        ]
    ]
);
