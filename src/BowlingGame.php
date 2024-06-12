<?php 
class BowlingGame{
    private $totalScore = 0;
    private $isSpare = false;
    private $strike = false;
    private $rollOneOrTwo = 1;
    private $totalFrameScore = 0;
    public function roll(int $knockeDownPins){
        
        if($this->isSpare){
            $this->totalScore +=$knockeDownPins;
            if($this->strike){
                $this->strike = false;
            }else{
                $this->isSpare = false;
            }
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
        if($knockeDownPins == 10){
            $this->strike = true;
        }
    }
    public function score():int{
        return $this->totalScore;
    }
}