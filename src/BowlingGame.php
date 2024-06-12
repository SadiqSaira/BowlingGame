<?php 
class BowlingGame{
    private $totalScore = 0;
    private $isSpare = false;
    private $strike = false;
    private $rollOneOrTwo = 1;
    private $totalFrameScore = 0;
    public function roll(int $knockeDownPins){
        // Processing bonus roll(s) for a spare and a strike in the last frame
        $this->processingBonusBall($knockeDownPins);

        //if first roll add it in frame total 
        if($this->rollOneOrTwo == 1){
            $this->handleFirstBall($knockeDownPins);

        // if second roll add it in frame total and in grand total
        }else {
            $this->handleSecondBall($knockeDownPins);
        }
        
    }
    public function score():int{
        return $this->totalScore;
    }
    private function processingBonusBall(int $knockeDownPins){
        if($this->isSpare){
            $this->totalScore +=$knockeDownPins;
            
            // If a strike was rolled, reset strike flag after adding first 
            //roll and to add another roll, but keep spare flag true
            if($this->strike){
                $this->strike = false;
            }else{
                $this->isSpare = false;
            }
        }
    }
    private function handleFirstBall(int $knockeDownPins){
        $this->rollOneOrTwo = 2;
            $this->totalFrameScore += $knockeDownPins; 
            //if score of first roll is 10,  set the strike flag 
            if($knockeDownPins == 10){
                $this->strike = true;
            }
    }
    private function handleSecondBall(int $knockeDownPins){
        $this->rollOneOrTwo = 1;
        $this->totalFrameScore += $knockeDownPins; 
        $this->totalScore += $this->totalFrameScore;

        //if frame total is 10 or more set the spare flag
        if($this->totalFrameScore >= 10){
            $this->isSpare = true;
        }
        $this->totalFrameScore = 0;
    }
}