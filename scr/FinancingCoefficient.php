<?php

namespace Jarouche\Financial;


class FinancingCoefficient
{
    
    protected $objInterestRate;
    protected $months;
    protected $FCValue;
    
    
    
    public function getFCValue() : float
    {
        
        $this->FCValue = $this->objInterestRate->getEvaluation()/(1-(1/pow(1+$this->objInterestRate->getEvaluation(),$this->months)));
        return $this->FCValue;
        
    }
    
    
    public function  __construct(float $InterestRate, int $months)
    {
        $this->objInterestRate = \Jarouche\Financial\InterestRate::rateFromLiteral($InterestRate);   
        $this->months = $months;
    }
}
