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
        
        return $this->response->setRedirectResponse($this->route->genereUrl('profile'));
    }
    
    /**
     * 
     * @param string $message
     */
    public function onFail($message){
        
        $this->view->assignVars([
            'error' => $message
        ]);
        
        return $this->response->setHtmlResponse($this->view->render('modules/profile/profile/index'));
    }
    
    public function onUserIsAuth(){
        
        return $this->response->setRedirectResponse($this->route->genereUrl('profile'));
        
    }
    
    
    
    
}
