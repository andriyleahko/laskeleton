<?php
return [
    'dbenable' => true, 
    'dbhost' => 'localhost',
    'dbuser' => 'root',
    'dbpass' => 'root',
    'dbname' => 'la',
    'dbdriver' => 'pdo_mysql',
    'events' => include_once 'config/event/events.php',
    'cachedriver' => 'fileCache', #redisCache, memCache
    'memcacheHost' => '127.0.0.1',
    'memcachePort' => '11211',
    'redisHost' => '127.0.0.1',
    'redisPort' => '6379',
    'redisPass' => 'foobared',
    'filecachePath' => 'cache',
    'templatePath' => 'template/',
    'baseTmpl' => 'main',
    'customValidationClasses' => include_once 'config/validate/validate.php',
    'customClearClasses' => include_once 'config/validate/clear.php',
    'passCrypt' => 'myPassCrypt',
    'authHandler' => 'myAuthHandler',
    'authUserAdapter' => 'userDataAdapter',
    'userTable' => 'User\\\User',
    'userData' => include_once 'config/users/user.php',
    'firewallRule' => include_once 'config/firewall/rule.php'
    
    

    
];
