<?php
/* Interface for Interest classes */
namespace Jarouche\Financial;

interface InterestRateInterface 
{
   
   /*
    * @method float getLioteral get interest literal value, example 50% is 50         
    */ 
   public function getLiteral() : float;
   
    /*
    * @method float getEvaluation get interest Evaluation value, example 50% is 0.5         
    */ 
   public function getEvaluation() :float;
}