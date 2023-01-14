<?php
// this file should be required in all other scripts to assure that common globals are accessible
    // defining includes folder as a constant
    define('INCLUDES_DIR', __DIR__.'/../includes/');
    
    // utils class, must be loaded after all constants are defined
    require_once(__DIR__.'/../Utils.php');
