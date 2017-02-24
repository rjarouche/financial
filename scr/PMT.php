<?php
namespace Jarouche\Financial;
class PMT
{
    protected $objFinancingCoefficient;
    protected $pv;
    protected $pmt;
    protected $type;
    
    public function __construct(float $InterestRate, int $periods, float $pv, int $type = 0)
    {
        
        if (!in_array($type, [0,1])) throw new \Exception("Value of type must be 0 or 1");

        $this->objFinancingCoefficient = new FinancingCoefficient($InterestRate,$periods,$type);
        $this->pv = $pv;
        $this->type = $type;
    }
    
    public function getPMTvalue() : float
    {
        $this->pmt = round($this->pv * $this->objFinancingCoefficient->getFCValue() / ($this->type == 0 ? 1 : (1 + $this->objFinancingCoefficient->getFCValue()) ) ,2);
        return $this->pmt; 
    }
    
}
