<?php

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;
use LAFramework\Container\Config;

$configComponents = Config::getConfig();

$isDevMode = true;

switch ($configComponents['components']['doctrine']['params']['typeEndityMap']['value']) {
    case 'annotation':
        $config = Setup::createAnnotationMetadataConfiguration(array(__DIR__."/{$configComponents['components']['doctrine']['params']['entityPath']['value']}"), $isDevMode);
        break;
    case 'xml':
        $config = Setup::createXMLMetadataConfiguration(array(__DIR__."/{$configComponents['components']['doctrine']['params']['entityPath']['value']}"), $isDevMode);
        break;
    case 'yml':
        $config = Setup::createYAMLMetadataConfiguration(array(__DIR__."/{$configComponents['components']['doctrine']['params']['entityPath']['value']}"), $isDevMode);
        break;
    default:
        break;
}


$entityManager = EntityManager::create($configComponents['components']['doctrine']['params']['dataBaseParams']['value'], $config);

return \Doctrine\ORM\Tools\Console\ConsoleRunner::createHelperSet($entityManager);
