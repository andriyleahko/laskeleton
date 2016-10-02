<?php

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;
use LAFramework\Container\Config;

$configComponents = Config::getConfig();

$isDevMode = true;
$config = Setup::createAnnotationMetadataConfiguration(array(__DIR__."/{$configComponents['components']['doctrine']['params']['entityPath']['value']}"), $isDevMode);

$entityManager = EntityManager::create($configComponents['components']['doctrine']['params']['dataBaseParams']['value'], $config);

return \Doctrine\ORM\Tools\Console\ConsoleRunner::createHelperSet($entityManager);
