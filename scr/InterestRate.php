<?php
namespace Jarouche\Financial;

class InterestRate implements InterestRateInterface
{
    protected $literal_rate;
    protected $evaluation_rate;
    protected $self_object;
    
    protected function __construct(){}
    
    public static function rateFromLiteral(float $rate) : InterestRateInterface
    {
        $self_object = new Self();
        $self_object->literal_rate = $rate;
        $self_object->evaluation_rate = $rate/100;
        return $self_object;
    }    
      
    
    public static function rateFromEvaluation(float $rate) : InterestRateInterface
    {
        $self_object = new Self();
        $self_object->literal_rate = $rate*100;
        $self_object->evaluation_rate = $rate;
        return $self_object;
    }    
    
    public function getLiteral() : float
    {
        return $this->literal_rate;
    }
    
    public function getEvaluation() : float
    {
        return $this->evaluation_rate;
    }    
       

}