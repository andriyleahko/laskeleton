<?php

namespace Component\MyClearVars;

use LAFramework\Validation\Clears\IClear;

/**
 * custom class for clear vars
 */
class Custom implements IClear {
    

    /**
     * 
     * @param mixin $var
     */
    public function clear($var) {
        
        /**
         * our realization
         */  
        
        return $var;
        
    }
    
    
    
    
}
