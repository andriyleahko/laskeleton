<?php

namespace Controller;

use LAFramework\Container\Container;
use LAFramework\Exceptions\NotFoundException;
use LAFramework\Exceptions\DenyException;
use LAFramework\Exceptions\NotAuthException;

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
    
    /**
     * 
     * @param string $message
     * @throws NotFoundException
     */
    public function notFoundException($message) {
        
        throw new NotFoundException($message);
    
    }
    
    /**
     * 
     * @param string $message
     * @throws DenyException
     */
    public function denyException($message) {
        
        throw new DenyException($message);
    
    }
    /**
     * 
     * @throws NotAuthException
     */
    public function notAuthException() {
        
        throw new NotAuthException();
    
    }
    
    
}