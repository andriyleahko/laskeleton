<?php

namespace Modules\Profile;
use Controller\BaseController;

/**
 * @description auth module
 */
class Profile extends BaseController {
    
    
    /**
     * 
     * @return string
     */
    public function index() {
        
        if (!$this->container->get('auth')->isAuth()) {
            $this->notAuthException();
        }
        
        $this->view->assignVars([
            'user' => $this->container->get('auth')->getAuthUser()
        ]);
        
        return $this->response->setHtmlResponse($this->view->render('modules/profile/profile/index'));
        
    }
    
    
}
