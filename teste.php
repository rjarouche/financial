<?php
    require_once  'vendor/autoload.php';
    
    
    $obj = new \Jarouche\Financial\PMT(0.05,3,1000.00);
    
    echo $obj->getPMTValue();