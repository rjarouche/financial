<?php
namespace Jarouche\Financial;
class FV extends PMT
{
    protected $fv;
    public function evaluate(): float
    {
        $this->fv = parent::evaluate() * $this->objFinancingCoefficient->periods;
        return $this->fv;
    }
}
