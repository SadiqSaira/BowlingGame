<?php 
class BowlingGame{
    private $totalScore = 0;
    public function roll(int $knockeDownPins){
        $this->totalScore += $knockeDownPins;
    }
    public function score():int{
        return $this->totalScore;
    }
}