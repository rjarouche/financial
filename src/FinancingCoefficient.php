<?php
/*
 * Class to evaluate the Financing Coefficient
 */
namespace Jarouche\Financial;

class FinancingCoefficient implements FinancialInterface
{
    protected $objInterestRate;
    protected $periods;
    protected $FCValue;
    protected $type;
    
    public function __get($property){
        return $this->{$property};
    }
    
    /*
     * @method __construct set properties to evaluate
     * @param float $InterestRate
     * @param int $periods
     * @param int[0,1] $type 0 - No payment for the first period 1 - Payment for first period
     * @uses   InterestRate::rateFromEvaluation
     * @todo find a way to config if is literal or evaluation     
     */
    public function __construct(float $InterestRate, int $periods,int $type = 0)
    {
        if (!in_array($type, [0,1])) throw new \Exception("Value of type must be 0 or 1");
    
        $this->objInterestRate = InterestRate::rateFromEvaluation($InterestRate);
        $this->periods = $periods;
        $this->type = $type;
    }
    
    public function evaluate(): float
    {
        $this->FCValue = $this->objInterestRate->getEvaluation() / (1 - (1 / pow(1 + $this->objInterestRate->getEvaluation(), ($this->periods - $this->type))));
        return $this->FCValue;
    }


}
