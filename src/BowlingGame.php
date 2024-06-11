<?php 
class BowlingGame{
    private $totalPins = 0;
    public function roll(int $knockeDownPins){
        $this->totalPins += $knockeDownPins;
    }
    public function score():int{
        return $this->totalPins;
    }
}