<?php
    require_once  'vendor/autoload.php';
    
    
    $obj = new \Jarouche\Financial\FinancingCoefficient(5,3);
    
    echo $obj->getFCValue();