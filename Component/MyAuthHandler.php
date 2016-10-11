<?php

namespace Component;

use LAFramework\Auth\IAuthHandler;
use LAFramework\View\View;
use LAFramework\HttpFoundation\Response;

class MyAuthHandler implements IAuthHandler{
    
    /**
     *
     * @var View 
     */
    private $view;
    
    
    /**
     *
     * @var Response 
     */
    private $response;
    
    
    /**
     * 
     * @param View $view
     * @param Response $response
     */
    public function __construct(View $view, Response $response) {
        $this->response = $response;
        $this->view = $view;
    }

    public function onSuccess() {
        /**
         * our realization
         */  
    }
    
    /**
     * 
     * @param string $message
     */
    public function onFail($message){
        /**
         * our realization
         */ 
    }
    
    public function onUserIsAuth(){
        /**
         * our realization
         */ 
        
    }
    
    
    
    
}
