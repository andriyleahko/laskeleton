<?php

namespace Component;

use LAFramework\Auth\IPassCrypt;

class PassCrypt implements IPassCrypt{
    
    
    /**
     * 
     * @param string $pass
     * @return string
     */
    public function crypt($pass) {
        /**
         * our realization
         */  
        return $pass;
    }
    
    
    
    
}
