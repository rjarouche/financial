<?php
/*class to evaluate FV excel formula
 *  @uses PMT::evaluate()
 */

namespace Jarouche\Financial;

class FV extends Payment
{
    protected $fv;
    public function evaluate(): float
    {
        $objPmt = new PMT(
            $this->objFinancingCoefficient->objInterestRate->getEvaluation(), 
            $this->objFinancingCoefficient->periods, 
            $this->pv, 
            $this->type
        );
        $this->fv = $objPmt->evaluate() * $this->objFinancingCoefficient->periods;
        return $this->fv;
    }
}
