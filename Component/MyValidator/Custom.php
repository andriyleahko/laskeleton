<?php

namespace Component\MyValidator;

use LAFramework\Validation\Classes\IValid;

/**
 * custom class for validation
 */
class Custom implements IValid {
    

    /**
     * 
     * @param mixin $var
     * @param string $key
     * @param array $option
     * @return array
     */
    public function validate($var, $key, $option = null) {
        
        if (!isset($var)) {
            return ['success' => false, 'error' => 'error message'];
        }
        
        return ['success' => true];
        
    }
    
    
    
    
}
