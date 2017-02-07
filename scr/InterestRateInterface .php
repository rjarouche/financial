<?php

namespace Jarouche\Finantial;

interface InterestRateInterface 
{
   public function getLiteral() : float;
   public function getEvaluation() :float;
}