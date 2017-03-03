<?php
namespace Jarouche\Financial;
class PMT extends Payment
{
    public function evaluate() : float
    {
        $this->pmt = $this->pv * $this->objFinancingCoefficient->evaluate() / ($this->type == 0 ? 1 : (1 + $this->objFinancingCoefficient->evaluate()) );
        return $this->pmt; 
    }
    
}
