<?php

namespace Controller;
use Controller\BaseController;

/**
 * @description root controller
 */
class Root extends BaseController {
    
    
    /**
     * 
     */
    public function index() {
        
        $this->response->setHtmlResponse($this->view->render('root/index'));
 
    }
    
    
}
