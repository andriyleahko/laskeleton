<?php

namespace Controller\My;
use Controller\BaseController;
use Product\Product;

/**
 * @example
 */
class First extends BaseController {
    
    /**
     * 
     * @param string $a
     * @param string $b
     * @param string $c
     */
    public function index($a, $b, $c) {
        
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