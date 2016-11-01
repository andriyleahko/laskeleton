<?php

namespace Component;

use LAFramework\Auth\IAuthHandler;
use LAFramework\View\View;
use LAFramework\HttpFoundation\Response;
use LAFramework\Container\Container ;

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
     * @var Container 
     */
    private $container;
    
    
    /**
     * 
     * @param View $view
     * @param Response $response
     */
    public function __construct(View $view, Response $response) {
        $this->response = $response;
        $this->view = $view;
        $this->container = Container::init();
    }

    public function onSuccess() {
        
        return $this->response->setRedirectResponse($this->container->get('route')->genereUrl('profile'));
    }
    
    /**
     * 
     * @param string $message
     */
    public function onFail($message){

        $session = $this->container->get('session');
        
        $session->setFlush('error',$message);
        
        return $this->response->setRedirectResponse($this->container->get('route')->genereUrl('login'));
    }
    
    public function onUserIsAuth(){
        
        return $this->response->setRedirectResponse($this->container->get('route')->genereUrl('profile'));
        
    }
    
    
    
    
}
