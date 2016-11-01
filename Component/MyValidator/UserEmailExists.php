<?php

namespace Component\MyValidator;

use LAFramework\Validation\Classes\IValid;
use LAFramework\Container\Container ;

/**
 * custom class for validation
 */
class UserEmailExists implements IValid {
    
    /**
     *
     * @var Container 
     */
    private $container;
    
    public function __construct() {
        $this->container = Container::init();
    }

    /**
     * 
     * @param mixin $var
     * @param string $key
     * @param array $option
     * @return array
     */
    public function validate($var, $key, $option = null) {
        
        $user = $this->container->get('doctrine')->getEntityManager()->getRepository('User\User')->findOneBy(['username' => $var]);
        
        if ($user) {
            return ['success' => false, 'error' => 'user is exists!'];
        }
        
        return ['success' => true];
        
    }
    
    
    
    
}
