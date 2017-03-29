<?php
/*
 * Interface for all Finacial evaluations 
 * Useful for some strategy patterns 
 */
namespace Jarouche\Financial;
interface FinancialInterface
{
    /*
     * @method float evaluate, return the evaluation of the class      
     */
    public function evaluate(): float;
}
