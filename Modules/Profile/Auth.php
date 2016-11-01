<?php

namespace Modules\Profile;
use Controller\BaseController;

/**
 * @description auth module
 */
class Auth extends BaseController {
    
    
    /**
     * 
     * @return string
     */
    public function login() {
        
        /**
         * if auth
         */
        if ($this->container->get('auth')->isAuth()) {
            return $this->response->setRedirectResponse($this->route->genereUrl('profile'));
        }
        
        $this->view->assignVars([
            'login_check_path' => $this->container->get('firewall')->paths['login']
        ]);
        
        /**
         * genere csrf and assign
         */
        $this->container->get('session')->genereCSRF();
        
        $this->view->assignVars([
            '_csrf' => $this->container->get('session')->getCSRF()
        ]);
        
        if ($error = $this->container->get('session')->getFlush('error')) {
            $this->view->assignVars([
                'error' => $error
            ]);
        }
        
        return $this->response->setHtmlResponse($this->view->render('modules/profile/auth/login'));
 
    }
    
    /**
     * 
     * @return redirect
     */
    public function logout() {
        
        /**
         * if not auth
         */
        if (!$this->container->get('auth')->isAuth()) {
            $this->notAuthException();
        }
        
        $this->container->get('auth')->logout();
        
        return $this->response->setRedirectResponse($this->route->genereUrl('root'));
        
    }
    
    
}
