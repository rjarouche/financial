<?php

namespace Jarouche\Financial;

class FinancingCoefficient
{
    protected $objInterestRate;
    protected $periods;
    protected $FCValue;
    protected $type;
    
    public function __construct(float $InterestRate, int $periods,int $type = 0)
    {
        if (!in_array($type, [0,1])) throw new \Exception("Value of type must be 0 or 1");
        // todo: find a way to config if is literal or evaluation
        $this->objInterestRate = InterestRate::rateFromEvaluation($InterestRate);
        $this->periods = $periods;
        $this->type = $type;
    }
    
    public function getFCValue(): float
    {
        $this->FCValue = $this->objInterestRate->getEvaluation() / (1 - (1 / pow(1 + $this->objInterestRate->getEvaluation(), ($this->periods - $this->type))));
        return $this->FCValue;
    }


}
