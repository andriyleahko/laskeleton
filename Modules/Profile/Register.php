<?php

namespace Modules\Profile;
use Controller\BaseController;
use User\User;

/**
 * @description auth module
 */
class Register extends BaseController {
    
    
    /**
     * 
     * @return string | redirect
     */
    public function register() { 
        
        $this->view->setTitle('Register');
        
        /**
         * if auth
         */
        if ($this->container->get('auth')->isAuth()) {
            return $this->response->setRedirectResponse($this->route->genereUrl('profile'));
        }
        
        if ($this->request->isPost()) {
            
            /**
             * validation
             */
            $validation = $this->container->get('validation');
            
            $validation->setVars($this->request->getPost());
            
            $validation->setRule([
                'username' => ['length' => ['min' => 3, 'max' => 100], 'notEmpty', 'email', 'userEmailExists'],
                'firstname' => ['length' => ['min' => 3, 'max' => 100], 'notEmpty'],
                'lastname' => ['length' => ['min' => 3, 'max' => 100], 'notEmpty'],
                'pass' => ['length' => ['min' => 3, 'max' => 100], 'notEmpty'],
                '_csrf' => ['csrf','notEmpty']
            ]);
            
            $validation->clearRule([
                'username' => ['basic'],
                'pass' => ['basic'],
                'firstname' => ['basic'],
                'lastname' => ['basic'],
            ]);
            
            $validation->validate();
            
            if (count($validation->getErrors()) == 0) {
                
                /**
                 * create user in db
                 */
                $user = new User();
                $user->setPass($this->container->get('myPassCrypt')->crypt($validation->getVar('pass')));
                $user->setUsername($validation->getVar('username'));
                $user->setFirstName($validation->getVar('firstname'));
                $user->setLastName($validation->getVar('lastname'));
                $this->doctrine->getEntityManager()->persist($user);
                $this->doctrine->getEntityManager()->flush();
                
                /**
                 * autologin
                 */
                $this->container->get('session')->setData('user', $user);
                
                /**
                 * redirect to profile
                 */
                return $this->response->setRedirectResponse($this->route->genereUrl('profile'));
                
                
                
            } else {
                
                /**
                 * assign validation errors
                 */
                $this->view->assignVars([
                    'errors' => $validation->getErrors()
                ]);

            }
            
        } 
        
        /**
         * genere csrf and assign
         */
        $this->container->get('session')->genereCSRF();
        
        $this->view->assignVars([
            '_csrf' => $this->container->get('session')->getCSRF()
        ]);
        
        /**
         * render register form
         */
        return $this->response->setHtmlResponse($this->view->render('modules/profile/register/register'));
        
 
    }
    
    
    
    
    
}
