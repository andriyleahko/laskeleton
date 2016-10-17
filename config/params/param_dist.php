<?php
return [
    'dbenable' => false, 
    'dbhost' => 'localhost',
    'dbuser' => 'root',
    'dbpass' => 'root',
    'dbname' => 'la',
    'dbdriver' => 'pdo_mysql',
    #event lists
    'events' => include_once 'config/event/events.php',
    # driver select one of them. For redisCache and memCache must be installed servers
    'cachedriver' => 'fileCache', #redisCache, memCache
    'memcacheHost' => '127.0.0.1',
    'memcachePort' => '11211',
    'redisHost' => '127.0.0.1',
    'redisPort' => '6379',
    'redisPass' => 'foobared',
    # path to cache dir 
    'filecachePath' => 'cache',
    # path to folder with template
    'templatePath' => 'template/',
    # path to main tpl 
    'baseTmpl' => 'main',
    # custom class for our validate rule
    'customValidationClasses' => include_once 'config/validate/validate.php',
    # custom class for clear post variable rule
    'customClearClasses' => include_once 'config/validate/clear.php',
    # class for crypt auth pass
    'passCrypt' => 'myPassCrypt',
    # class for working with auth event
    'authHandler' => 'myAuthHandler',
    # adapter for user container
    'authUserAdapter' => 'userDataAdapter', #userDbAdapter
    # entity class for user table
    'userTable' => 'User\\\User',
    # user list when authUserAdapter is userDataAdapter
    'userData' => include_once 'config/users/user.php',
    # tpl for 404 error
    'tpl404' => '404',
    # tpl for 403 error
    'tpl403' => '403',
    # tpl for custom error
    'customErr' => 'error'
    
    
    

    
];
