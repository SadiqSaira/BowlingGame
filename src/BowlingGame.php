<?php 
class BowlingGame{
    private $totalScore = 0;
    private $isSpare = false;
    private $rollOneOrTwo = 1;
    private $totalFrameScore = 0;
    public function roll(int $knockeDownPins){
        if($this->isSpare){
            $this->totalScore +=$knockeDownPins;
            $this->isSpare = false;
        }
        if($this->rollOneOrTwo == 1){
            $this->rollOneOrTwo = 2;
            $this->totalFrameScore += $knockeDownPins; 

        }else if($this->rollOneOrTwo == 2){
            $this->rollOneOrTwo = 1;
            $this->totalFrameScore += $knockeDownPins; 
            $this->totalScore += $this->totalFrameScore;

            if($this->totalFrameScore == 10){
                $this->isSpare = true;
            }
            $this->totalFrameScore = 0;
        }

    }
    public function score():int{
        return $this->totalScore;
    }
}