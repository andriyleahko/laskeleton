<?php

namespace Controller\My;
use Controller\BaseController;
use Product\Product;

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
     * @param string $b
     * @param string $c
     */
    public function index($a, $b, $c) {
        
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
        
        $product = new Product();
        $product->setName('222');
        $this->container->get('doctrine')->getEntityManager()->persist($product);
        $this->container->get('doctrine')->getEntityManager()->flush();
        
        $productRepository = $this->container->get('doctrine')->getEntityManager()->getRepository('Product\Product');
        $products = $productRepository->findAll();
        
        $data = [
            'product' => $products,
            'asda' => 'asdasda'
        ];
        
        $this->view->assignVars(['data' => $data]);
        
        $this->response->setHtmlResponse($this->view->render('test'));
        
        //$this->response->setJsonResponse($data);
        
        
    }
    
    
}