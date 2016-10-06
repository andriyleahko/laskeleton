<?php

namespace Component;

use LAFramework\Auth\IAuthHandler;
use LAFramework\Container\Container;

class MyAuthHandler implements IAuthHandler{
    
    /**
     *
     * @var LAFramework\Container\Container 
     */
    private $container;
    
    
    /**
     * @todo set object in constructor as DI
     */
    public function __construct() {
        $this->container = Container::init();
    }

    public function onSuccess() {
        
    }
    
    /**
     * 
     * @param string $message
     */
    public function onFail($message){
        
    }
    
    public function onUserIsAuth(){
        
    }
    
    
    
    
}
