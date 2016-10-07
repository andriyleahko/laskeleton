<?php 

require_once __DIR__.'/vendor/autoload.php';


use Symfony\Component\Debug\Debug;
use LAFramework\Container\Container;

Debug::enable();


spl_autoload_register(function($class) {
    
    $fileName = 'Entity/' . str_replace('\\', '/', $class) . '.php';

    if (file_exists($fileName)) {
        require_once $fileName;
    }
    
});
spl_autoload_register(function($class) {
    
    $fileName = str_replace('\\', '/', $class) . '.php';

    if (file_exists($fileName)) {
        require_once $fileName;
    }
    
});

try {
    
    $container = Container::init();
    $container->get('processor')->resolve();
    $container->get('response')->getResponse();
    exit;
    
} catch (\Exception $ex) {
    dump($ex);
}



