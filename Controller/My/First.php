<?php

namespace Controller\My;
use Controller\BaseController;
use Product\Product;
use User\User;

/**
 * @example
 */
class First extends BaseController {
    
    /**
     * @var \LAFramework\Validation\Validation;
     */
    private $validation;
    
    /**
     * 
     * @param string $a
     */
    public function index($a) {
      
        /**
         * for create user
         *
        $user = new User();
        $user->setUsername('andriy@leshko.com');
        $user->setCity('lviv');
        $user->setPass($this->container->get('myPassCrypt')->crypt('123456'));
        $user->setRoles(['Superadmin']);
        
        $this->container->get('doctrine')->getEntityManager()->persist($user);
        $this->container->get('doctrine')->getEntityManager()->flush();
        
        $user = new User();
        $user->setUsername('vasa@vasa.com');
        $user->setCity('kyiv');
        $user->setPass($this->container->get('myPassCrypt')->crypt('1234567'));
        $user->setRoles(['User']);
        
        
        $this->container->get('doctrine')->getEntityManager()->persist($user);
        $this->container->get('doctrine')->getEntityManager()->flush();
         * 
         */
        
        /**
         * example validation
         *
        $this->validation = $this->container->get('validation');
        
        $this->validation->setVars([
            'name' => 'Andriy',
            'email' => 'andriy@leshko.com',
            'pass' => '123456',
            'city' => '<p>lviv</p>'
        ]);
        
        $this->validation->setRule([
            'name' => ['length' => ['min' => 3, 'max' => 20], 'notEmpty'],
            'email' => ['length' => ['min' => 3, 'max' => 100], 'notEmpty', 'email'],
            'pass' => ['length' => ['min' => 3, 'max' => 20], 'notEmpty'],
            'city' => ['custom']
        ]);
        
        $this->validation->clearRule([
            'city' => ['basic'],
            'email' => ['basic'],
            'pass' => ['basic'],
            'name' => ['basic'],
        ]);
        
        $this->validation->validate();
        
        dump($this->validation->getErrors());
        dump($this->validation->getVars());
         * 
         */
        
        /**
         * create and find product
         *
         
        $product = new Product();
        $product->setName('222');
        $this->container->get('doctrine')->getEntityManager()->persist($product);
        $this->container->get('doctrine')->getEntityManager()->flush();
        
        $productRepository = $this->container->get('doctrine')->getEntityManager()->getRepository('Product\Product');
        $products = $productRepository->findAll();
         * 
         */
        
        /**
         * display data
         */
        $data = [
            'product' => 'assa',
            'asda' => 'asdasda'
        ];
        
        $this->view->assignVars(['data' => $data]);
        
        $this->response->setHtmlResponse($this->view->render('test'));
        
        /**
         * json example
         *
        $this->response->setJsonResponse($data);
         * 
         */
        
        
        
    }
    
    
}
