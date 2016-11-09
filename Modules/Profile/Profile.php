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
            
            'user' => $this->doctrine->getEntityManager()->getRepository('User\User')->findOneBy(['username' => $this->container->get('auth')->getAuthUser()['username']])
        ]);
        
        return $this->response->setHtmlResponse($this->view->render('modules/profile/profile/index'));
        
    }
    
    
}
