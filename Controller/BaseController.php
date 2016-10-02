<?php

namespace Controller;

use LAFramework\Container\Container;

/**
 * base class for all controllers
 */
class BaseController {
    
    /**
     *
     * @var Container 
     */
    public $container;
    
    /**
     *
     * @var \LAFramework\Router\Route
     */
    public $route;
    
    /**
     *
     * @var \LAFramework\HttpFoundation\Request 
     */
    public $request;
    
    /**
     *
     * @var \LAFramework\View\View 
     */
    public $view;
    /**
     *
     * @var \LAFramework\Doctrine\Doctrine 
     */
    public $doctrine;
    
    /**
     *
     * @var \HttpFoundation\Response 
     */
    public $response;
    
    public function __construct() {
        $this->container = Container::init();
        $this->route = $this->container->get('route');
        $this->request = $this->container->get('request');
        
        $this->view = $this->container->get('view');
        $this->response = $this->container->get('response');
        $this->doctrine = $this->container->get('doctrine');
    }
    
    
}